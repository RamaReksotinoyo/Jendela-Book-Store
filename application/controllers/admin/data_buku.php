<?php

class data_buku extends CI_Controller{
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
        $data['buku']=$this->model_buku->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_buku_view', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi(){
        $nama_buku=$this->input->post('nama_buku');
        $kategori=$this->input->post('kategori');
        $harga=$this->input->post('harga');
        $stok=$this->input->post('stok');
        $gambar=$_FILES['gambar']['name'];
        if($gambar =''){}
        else{
            $config['upload_path']='./uploads/agamafilsafat';
            $config['allowed_types']='jpg|png|jpeg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gagal Upload Gambar";
            }
            else{
                $gambar = $this->upload->data('file_name');
            }
        }
        $data=array (
            'nama_buku' =>$nama_buku,
            'kategori' =>$kategori,
            'harga' =>$harga,
            'stok' =>$stok,
            'gambar' =>$gambar
        );
        $this->model_buku->tambah_buku($data, 'tb_buku');
        redirect('admin/data_buku/index');
    }

	public function print()
	{
		$data['buku'] = $this->model_buku->tampil_data("tb_buku")->result();
		$this->load->view('print_buku',$data);
	}
	public function pdf(){
		$this->load->library('dompdf_gen');
		$data['buku'] =$this->model_barang->tampil_data('tb_buku')->result();
		$this->load->view('laporan_pdf',$data);
		
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_buku.pdf", array('Attachment' =>0));

	}

    public function edit($id){
        $where=array('id_buku'=>$id);
        $data['buku']=$this->model_buku->edit_buku($where, 'tb_buku')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_buku', $data);
        $this->load->view('templates_admin/footer');
    }
    public function update(){
        $id=$this->input->post('id_buku');
        $nama_buku=$this->input->post('nama_buku');
        $kategori=$this->input->post('kategori');
        $harga=$this->input->post('harga');
        $stok=$this->input->post('stok');

        $data=array(
            'nama_buku'=>$nama_buku,
            'kategori'=>$kategori,
            'harga'=>$harga,
            'stok'=>$stok
        );
        $where=array(
            'id_buku'=>$id
        );
        $this->model_buku->update_data($where, $data, 'tb_buku');
        redirect('admin/data_buku/index');
    }
    public function hapus ($id){
        $where = array('id_buku'=>$id);
        $this->model_buku->hapus_data($where, 'tb_buku');
        redirect('admin/data_buku/index');
    }

}