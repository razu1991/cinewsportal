<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class User_Login extends CI_Controller {

    //Check User Login/Logout And Secure Back Button...............
    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id != NULL) {
            redirect('welcome', 'refresh');
        }
    }

    //Load Default Page........................
    public function index() {
        $data['all_category'] = $this->welcome_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('login', $data, true);
        $data['title'] = "Login Your Account";
        $this->load->view('master', $data);
    }

//Check User Authintication......................
    public function check_user_login() {
        $data = array();
        $data['user_email_address'] = $this->input->post('user_email_address', true);
        $data['user_password'] = $this->input->post('user_password', true);
        $result = $this->welcome_model->check_user_login($data);
        $sdata = array();
        if ($result) {
            $sdata['user_id'] = $result->user_id;
            $sdata['full_name'] = $result->full_name;
            $this->session->set_userdata($sdata);
            redirect();
        } else {
            $sdata['exception'] = 'Your Email Address/Passoword Invalid!';
            $this->session->set_userdata($sdata);
            redirect('user_login');
        }
    }

//End User Login Controller....................
}

?>