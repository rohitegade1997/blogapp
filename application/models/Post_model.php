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
    public function get_all_posts()
    {
        try {
            $this->db->select('id, title,short_description,long_description,image_name');
            $this->db->from('posts');
            $query = $this->db->get();
            return $query->result();
        } catch (Exception $obj) {
            return $obj;
        }
    }

    public function add_post($category, $title, $short_description, $long_description, $image_name)
    {
        try {
            $system_date = date('d-m-y h:i:s');
            $post_arr = array(
                "category_id" => $category,
                "title" => $title,
                "short_description" => $short_description,
                "long_description" => $long_description,
                "image_name" => $image_name,
                "created_on" => $system_date,
                "updated_on" => $system_date
            );
            $this->db->insert('posts', $post_arr);
            return array("status" => TRUE, "message" => "Your post has been published", "data" => "");
        } catch (Exception $obj) {
            return array("status" => FALSE, "message" => "Something went wrong", "data" => "");
        }
    }

    public function delete_post($data)
    {
        try {
            $this->db->where('id', $data['postId']);
            $this->db->delete('posts');
            return array("status" => TRUE, "message" => "Post deleted", "data" => "");
        } catch (Exception $obj) {
            return array("status" => FALSE, "message" => "Something went wrong", "data" => "");
        }
    }
}
