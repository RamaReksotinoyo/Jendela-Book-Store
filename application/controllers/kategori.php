<?php

class kategori extends CI_Controller{
    public function diskon(){
        $data['diskon']=$this->model_kategori->data_diskon()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('diskon', $data);
        $this->load->view('templates/footer');
    }
    public function agamafilsafat(){
        $data['agamafilsafat']=$this->model_kategori->data_agamafilsafat()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('agamafilsafat', $data);
        $this->load->view('templates/footer');
    }
    public function novelsastra(){
        $data['novelsastra']=$this->model_kategori->data_novelsastra()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('novelsastra', $data);
        $this->load->view('templates/footer');
    }
    public function sosialpolitik(){
        $data['sosialpolitik']=$this->model_kategori->data_sosialpolitik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sosialpolitik', $data);
        $this->load->view('templates/footer');
    }
    public function umum(){
        $data['umum']=$this->model_kategori->data_umum()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('umum', $data);
        $this->load->view('templates/footer');
    }
}