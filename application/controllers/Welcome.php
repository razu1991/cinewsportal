<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array();

        $data['all_header_category'] = $this->welcome_model->select_all_published_header_Category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['all_mid_category'] = $this->welcome_model->select_all_published_mid_Category();
        $data['all_frontdesk_category'] = $this->welcome_model->select_all_published_frontdesk_Category();
        $data['all_footer_category'] = $this->welcome_model->select_all_published_footer_Category();
        $data['featured_news'] = $this->welcome_model->select_all_featured_news();
        $data['breaking_news'] = $this->welcome_model->select_all_breaking_news();
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['maincontent'] = $this->load->view('pages/index', $data, true);
        $data['title'] = 'Home';
        $data['sidebar'] = 1;
        $this->load->view('master', $data);
    }

    //Start About Section.................................
    public function about() {
        $data = array();
        $data['all_header_category'] = $this->welcome_model->select_all_published_header_Category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['all_footer_category'] = $this->welcome_model->select_all_published_footer_Category();
        $data['featured_news'] = $this->welcome_model->select_all_featured_news();
        $data['breaking_news'] = $this->welcome_model->select_all_breaking_news();
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['maincontent'] = $this->load->view('pages/about', '', true);
        $data['title'] = 'About';
        $this->load->view('master', $data);
    }

    //Newsportal Contact Page And Form...................
    public function contact() {
        $data = array();
        $data['maincontent'] = $this->load->view('pages/contact', '', true);
        $data['title'] = 'Contact';
        $this->load->view('master', $data);
    }

    //Show Category Wise All News....................................
    public function news_category($category_id) {
        $data = array();
        $data['all_header_category'] = $this->welcome_model->select_all_published_header_category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['category_element_by_id'] = $this->welcome_model->select_category_by_id($category_id);
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['news_by_category'] = $this->welcome_model->select_news_by_category($category_id);
        $data['title'] = 'News Details';
        $data['sidebar'] = 1;
        $data['maincontent'] = $this->load->view('pages/view_category', $data, true);
        $this->load->view('master', $data);
    }

    //Show Specific news Details ........................................
    public function news_details($news_id) {
        $data = array();
        $data['all_header_category'] = $this->welcome_model->select_all_published_header_category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['comments_info'] = $this->welcome_model->published_comments_info($news_id);
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['title'] = 'News Category';
        $data['sidebar'] = 1;
        $data['comments_info'] = $this->welcome_model->published_comments_info($news_id);
        $data['news_info'] = $this->super_admin_model->select_news_by_id($news_id);
        $data['maincontent'] = $this->load->view('pages/view_news', $data, true);
        $data['title'] = 'News Detail';
        $this->load->view('master', $data);
    }

    //Save User Comments ..............................................
    public function save_comments() {
        $news_id = $this->input->post('news_id', true);
        $this->welcome_model->save_comments_info();
        $sdata = array();
        $sdata['message'] = 'Your Comments Successfully Posted but weating for Approval !';
        $this->session->set_userdata($sdata);
        redirect('welcome/news_details/' . $news_id);
    }

    //User/Reader Registration....................................
    public function save_user_info() {
        $this->welcome_model->save_user_info();
        $sdata = array();
        $sdata['success'] = 'Registration Sucessfull';
        $this->session->set_userdata($sdata);
        redirect();
    }

    //User Login Check/User Authintication.........................
    public function check_user_login() {
        $data = array();
        $data['user_email_address'] = $this->input->post('user_email_add' . '', true);
        $data['user_password'] = $this->input->post('user_password', true);
        $result = $this->welcome_model->user_login_check($data);

        $sdata = array();
        if ($result) {
            $sdata['user_id'] = $result->user_id;
            $sdata['user_name'] = $result->user_name;
            $this->session->set_userdata($sdata);
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {
            $sdata['exception'] = 'Your Email/Password Is invalid!';
            $this->session->set_userdata($sdata);

            redirect('welcome/show_error');
        }
    }

    //Reset Password........................................
    public function forgot_password() {
        $data = array();
        $data['all_header_category'] = $this->welcome_model->select_all_published_header_Category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['all_footer_category'] = $this->welcome_model->select_all_published_footer_Category();
        $data['featured_news'] = $this->welcome_model->select_all_featured_news();
        $data['breaking_news'] = $this->welcome_model->select_all_breaking_news();
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['maincontent'] = $this->load->view('pages/forgotpass', $data, true);
        $data['title'] = 'About';
        $this->load->view('master', $data);
    }

    //Sent Forgot Password To Email..........................................
    public function get_password() {
        $data = array();
        $data['user_email_address'] = $this->input->post('user_email_address' . '', true);
        $result = $this->welcome_model->ajax_email_check_info($data['user_email_address']);
        $sdata = array();
        if ($result) {
            $password = $result->user_password;
            $to = $data['user_email_address'];
            $subject = "Forgot Password ";
            $message = "       
                    Your Password Is: $password;
                    ";
            $headers = "MIME 1.0" . "\r\n";
            $headers .= "Content-type: text/html" . "\r\n";
            $headers .= "From: xcommerce@raazu.com" . "\r\n";
            mail($to, $subject, $message, $headers);
            $sdata['success'] = 'Password Sent To Your Email.!';
            $this->session->set_userdata($sdata);
            redirect('welcome/show_error');
        } else {
            $sdata['exception'] = 'Your Email Not Found!';
            $this->session->set_userdata($sdata);
            redirect('welcome/show_error');
        }
    }

    //Show All Error Message/Info Here..............................
    public function show_error() {
        $data = array();
        $data['all_header_category'] = $this->welcome_model->select_all_published_header_Category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_Category();
        $data['all_footer_category'] = $this->welcome_model->select_all_published_footer_Category();
        $data['featured_news'] = $this->welcome_model->select_all_featured_news();
        $data['breaking_news'] = $this->welcome_model->select_all_breaking_news();
        $data['latest_news'] = $this->welcome_model->select_all_latest_news();
        $data['popular_news'] = $this->welcome_model->select_all_popular_news();
        $data['maincontent'] = $this->load->view('pages/show_error', '', true);
        $data['title'] = 'Error';
        $this->load->view('master', $data);
    }

    //Before Registration Check Email Already exists....................
    public function ajax_email_check($email_address) {
        $result = $this->welcome_model->ajax_email_check_info($email_address);
        if ($result) {
            echo 'already exists';
        } else {
            echo 'available';
        }
    }

    //User/Reader Logout......................................................
    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $sdata['message'] = 'You Successfully Logout';
        $this->session->set_userdata($sdata);
        redirect('/');
    }

    //.......................End Welcome Controller..............................
}
