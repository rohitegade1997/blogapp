<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function loginMe($email, $password)
    {
        try {
            $query = $this->db->get_where('user', array('email' => $email, 'password' => $password));
            if ($query->num_rows() == 1) {
                $user_id = $query->result()[0]->id;
                $email = $query->result()[0]->email;
                $this->session->set_userdata('arr_session', array("userId" => $user_id, "email" => $email));
                return array("status" => TRUE, "message" => "Logged In Successfully !!", "data" => "");
            } else {
                return array("status" => FALSE, "message" => "Failed to Login", "data" => "");
            }
        } catch (Exception $obj) {
            return array("status" => FALSE, "message" => "Something went wrong", "data" => "");
        }
    }
}
