<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function get_categories()
    {
        try {
            $this->db->select('id,category_name');
            $this->db->from('categories');
            $this->db->where('is_active', 1);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $obj) {
            return $obj;
        }
    }
}
