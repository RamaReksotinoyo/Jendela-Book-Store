<?php

class model_kategori extends CI_Model{
    public function data_diskon(){
        return $this->db->get_where("tb_buku", array('kategori'=>'diskon')); 
        //untuk mengambil data dari tb_buku yg berkategori diskon
    }
    public function data_agamafilsafat(){
        return $this->db->get_where("tb_buku", array('kategori'=>'agamafilsafat')); 
        //untuk mengambil data dari tb_buku yg berkategori agama&filsafat
    }
    public function data_novelsastra(){
        return $this->db->get_where("tb_buku", array('kategori'=>'novelsastra')); 
        //untuk mengambil data dari tb_buku yg berkategori agama&filsafat
    }
    public function data_sosialpolitik(){
        return $this->db->get_where("tb_buku", array('kategori'=>'sosialpolitik')); 
        //untuk mengambil data dari tb_buku yg berkategori agama&filsafat
    }
    public function data_umum(){
        return $this->db->get_where("tb_buku", array('kategori'=>'umum')); 
        //untuk mengambil data dari tb_buku yg berkategori agama&filsafat
    }
}