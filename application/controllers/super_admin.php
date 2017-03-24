<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class super_admin extends CI_Controller {

    //Check Admin Login/Logout And Back Button Security...........
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('administrator', 'refresh');
        }
    }

    //Show Default Page After Login....................
    public function index() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/dashboard', '', true);
        $data['title'] = 'Dashboard';
        $this->load->view('admin/admin_master', $data);
    }

    //Add News Category...........................
    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category', '', true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    //Save News Category.....................
    public function save_category() {

        $this->super_admin_model->save_category_info();
        $sdata['message'] = 'Category Info Sucessfully Save';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }

    //Manage News Category................
    public function manage_category() {
        $data = array();
        $data['all_category'] = $this->super_admin_model->select_all_category();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category', $data, true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    //Unpublished News Category.....................
    public function unpublished_category($category_id) {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    //Publish News Category............................
    public function published_category($category_id) {
        $this->super_admin_model->published_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    //Edit News Category...........................
    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category', $data, true);
        $data['title'] = 'Edit Category';
        $this->load->view('admin/admin_master', $data);
    }

    //Update News Category.........................
    public function update_category() {
        $this->super_admin_model->update_category_info();
        redirect('super_admin/manage_category');
    }

    //Delete News Category.............................
    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    //Start News Tag Section And Add News Tag.............
    public function add_tag() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_tag', '', true);
        $data['title'] = 'Add Tag';
        $this->load->view('admin/admin_master', $data);
    }

    //Save News Tag.........................
    public function save_tag() {
        $this->super_admin_model->save_tag_info();
        $sdata['message'] = 'Tag Info Sucessfully Save';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_tag');
    }

    //Manage News Tag..............................
    public function manage_tag() {
        $data = array();
        $data['all_tag'] = $this->super_admin_model->select_all_tag();
        $data['admin_maincontent'] = $this->load->view('admin/manage_tag', $data, true);
        $data['title'] = 'Add Category';
        $this->load->view('admin/admin_master', $data);
    }

    //Unpublished News Tag........................
    public function unpublished_tag($tag_id) {
        $this->super_admin_model->unpublished_tag_by_id($tag_id);
        redirect('super_admin/manage_tag');
    }

    //Published News Tag..........................
    public function published_tag($tag_id) {
        $this->super_admin_model->published_tag_by_id($tag_id);
        redirect('super_admin/manage_tag');
    }

    //Edit News Tag.....................................
    public function edit_tag($tag_id) {
        $data = array();
        $data['tag_info'] = $this->super_admin_model->select_tag_by_id($tag_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_tag', $data, true);
        $data['title'] = 'Edit Category';
        $this->load->view('admin/admin_master', $data);
    }

    //Update News Tag...................................
    public function update_tag() {
        $this->super_admin_model->update_tag_info();
        redirect('super_admin/manage_tag');
    }

    //Delete News Tag................................
    public function delete_tag($tag_id) {
        $this->super_admin_model->delete_tag_by_id($tag_id);
        redirect('super_admin/manage_tag');
    }

    //End Tag Section..............
    //Add News...............................
    public function add_news() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_Category();
        $data['all_published_tag'] = $this->welcome_model->select_all_published_Tag();
        $data['admin_maincontent'] = $this->load->view('admin/add_news', $data, true);
        $data['title'] = 'Add News';
        $this->load->view('admin/admin_master', $data);
    }

    // Start Save news.............................
    public function save_news() {
        $data = array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['tag_id'] = $this->input->post('tag_id', true);
        $data['news_summary'] = $this->input->post('news_summary', true);
        $data['full_news'] = $this->input->post('full_news', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $data['breaking_news'] = $this->input->post('breaking_news', true);
        $data['featured_news'] = $this->input->post('featured_news', true);
        $data['author_name'] = $this->session->userdata('admin_name');
        /*
         * Start Image Upload 
         */
        $config['upload_path'] = 'img/news_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $error = '';
        $fdata = array();
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('news_image')) {
            $error = $this->upload->display_errors();
            $sdata['message'] = 'Image Type Not Vallid';
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_news');
            // $this->load->view('upload_form', $error);
        } else {
            $fdata = $this->upload->data();
            $data['news_image'] = $config['upload_path'] . $fdata['file_name'];
            //$this->load->view('upload_success', $data);
        }
        /*
         * End Image Upload 
         */
        $this->super_admin_model->save_news_info($data);
        $sdata['message'] = 'News Info Sucessfully Save';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_news');
    }

    //Manage All News..........................
    public function manage_news() {
        $data = array();
        $data['all_news'] = $this->super_admin_model->select_all_news();
        $data['admin_maincontent'] = $this->load->view('admin/manage_news', $data, true);
        $data['title'] = 'Manage News';
        $this->load->view('admin/admin_master', $data);
    }

    //Publish News................................
    public function published_news($news_id) {
        $this->super_admin_model->published_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    //Unpublish News...............................
    public function unpublished_news($news_id) {
        $this->super_admin_model->unpublished_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    //Edit News..................................
    public function edit_news($news_id) {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['news_info'] = $this->super_admin_model->select_news_by_id($news_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_news', $data, true);
        $data['title'] = 'Edit News';
        $this->load->view('admin/admin_master', $data);
    }

    //Update News.....................................
    public function update_news($news_id) {
        $this->super_admin_model->update_news_by_id($news_id);
        redirect('super_admin/manage_news');
    }

    //End News Section.......................
    //Manage Comment..................
    public function manage_comment() {
        $data = array();
        $data['all_comment'] = $this->super_admin_model->select_all_comment();
        $data['admin_maincontent'] = $this->load->view('admin/manage_comment', $data, true);
        $data['title'] = 'Manage Comment';
        $this->load->view('admin/admin_master', $data);
    }

    //Delete Comment............
    public function delete_comment($comment_id) {
        $this->super_admin_model->delete_comment_by_id($comment_id);
        redirect('super_admin/manage_comment');
    }

    //End Comment........................................
    //Admin Logout .......................
    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['message'] = 'You Successfully Logout';
        $this->session->set_userdata($sdata);
        redirect('administrator');
    }

    //End Super Admin Controller...........
}
