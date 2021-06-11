<?php

class dashboard_controller extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') != 2){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Login Terlebih Dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }


    public function tambah_ke_keranjang($id){
        $buku=$this->model_buku->find($id); //utk mencari id yg diklik oleh user

        $data=array(
            'id' => $buku->id_buku,
            'qty' => 1,
            'price' => $buku->harga,
            'name' => $buku->nama_buku
        );
        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('welcome/index');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan(){
        $is_processed=$this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        }
        else{
            echo "Pesanan Anda Gagal Diproses!";
        }
    }



    // public function agamafilsafat(){
    //     $this->cart->destroy();
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('agamafilsafat');
    //     $this->load->view('templates/footer');
    // }


}