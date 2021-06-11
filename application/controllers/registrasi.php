<?php

class registrasi extends CI_Controller{
    public function index(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|mathces[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|mathces[password1]');
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        }else{
            $data=array(
                'id'=>'',
                'nama'=>$this->input->post('nama'),
                'username'=>$this->input->post('username'),
                'password'=>$this->input->post('password1'),
                'role_id'=>2,
            );

            //$this->db->insert->('tb_user', $data);
            redirect('auth/login');
        }

    }
}