<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->arr_session = $this->session->userdata('arr_session');
    }
    public function admin_login()
    {
        try {
            if ($this->input->post()  != null) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $this->load->model('admin/login_model');
                echo json_encode($this->login_model->loginMe($email, $password));
            } else {
                $this->load->view('admin/login');
            }
        } catch (Exception $obj) {
            echo $obj;
        }
    }
}
