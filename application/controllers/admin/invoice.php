<?php

class invoice extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') != 1){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Login Terlebih Dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index(){
        $data['invoice']=$this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice_view', $data);
        $this->load->view('templates_admin/footer');
    }

    public function print()
    {
      $data['invoice'] = $this->model_buku->tampil_data("tb_invoice")->result();
      $this->load->view('print_invoice',$data);
    }
    public function pdf(){
      $this->load->library('dompdf_gen');
      $data['invoice'] =$this->model_barang->tampil_data('tb_invoice')->result();
      $this->load->view('laporan_pdf_invoice',$data);
      
      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
  
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("laporan_invoice.pdf", array('Attachment' =>0));
  
    }

    public function detail($id){
      $data['invoice']=$this->model_invoice->ambil_id_invoice($id);
      $data['pesanan']=$this->model_invoice->ambil_id_pesanan($id);
      $this->load->view('templates_admin/header');
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/detail_invoice', $data);
      $this->load->view('templates_admin/footer');
    }
}