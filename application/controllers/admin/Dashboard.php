<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->arr_session = $this->session->userdata('arr_session');
    }
    public function get_posts()
    {
        try {
            echo "list of posts";
        } catch (Exception $obj) {
            echo $obj;
        }
    }
}
