<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        try {
            $this->load->model('category_model');
            $categories = $this->category_model->get_categories();
            $data = array('url' => 'home', 'categories' => $categories, 'posts' => null);
            //print_r($categories);
            $this->load->view('common/wrapper', $data);
        } catch (Exception $obj) {
            return $obj;
        }
    }

    public function get_posts()
    {
        try {
            $category_id = $this->input->get('id');
            //$category_id = $this->uri->segment(3);
            $this->load->model('category_model');
            $categories = $this->category_model->get_categories();
            $this->load->model('post_model');
            $posts = $this->post_model->get_posts($category_id);
            $data = array('url' => 'posts', 'categories' => $categories, 'posts' => $posts);
            $this->load->view('common/wrapper', $data);
        } catch (Exception $obj) {
            return $obj;
        }
    }

    public function post()
    {
        try {
            $post_id = $this->input->get('id');
            $this->load->model('post_model');
            $post = $this->post_model->get_post($post_id);
            $data = array('url' => 'post_detail', 'categories' => null, 'posts' => null, 'post' => $post);
            $this->load->view('common/wrapper', $data);
        } catch (Exception $obj) {
            return $obj;
        }
    }
}
