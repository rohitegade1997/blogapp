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
            $this->load->model('post_model');
            $posts = $this->post_model->get_all_posts();
            $post_data = array('posts' => $posts);
            $this->load->view('admin/posts', $post_data);
        } catch (Exception $obj) {
            return $obj;
        }
    }

    public function add_post()
    {
        try {
            if ($this->input->post() != null) {
                $config['upload_path'] = "./assets/images/posts/";
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload("imageFile")) {
                    $data = array('upload_data' => $this->upload->data());
                    $category = $this->input->post('category');
                    $title = $this->input->post('title');
                    $short_description = $this->input->post('shortDescription');
                    $long_description = $this->input->post('longDescription');
                    $image_name = $data['upload_data']['file_name'];
                    $this->load->model('post_model');
                    echo json_encode($this->post_model->add_post($category, $title, $short_description, $long_description, $image_name));
                }
            } else {
                $this->load->model('category_model');
                $categories = $this->category_model->get_categories();
                $category_data = array('categories' => $categories);
                $this->load->view('admin/add_post', $category_data);
            }
        } catch (Exception $obj) {
            echo $obj;
        }
    }

    public function delete_post()
    {
        try {
            $data = json_decode($this->input->post('result'));
            $this->load->model('post_model');
            echo json_encode($this->post_model->delete_post($data));
        } catch (Exception $obj) {
            echo $obj;
        }
    }
}
