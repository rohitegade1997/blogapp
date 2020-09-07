<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function get_posts($category_id)
    {
        try {
            $this->db->select('id,title,short_description,long_description,image_name');
            $this->db->from('posts');
            $this->db->where('category_id', $category_id);
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $obj) {
            return $obj;
        }
    }

    public function get_post($post_id)
    {
        try {
            $this->db->select('title,short_description,long_description,image_name');
            $this->db->from('posts');
            $this->db->where('id', $post_id);
            $query = $this->db->get();
            return $query->result_array();
        } catch (Exception $obj) {
            return $obj;
        }
    }
}
