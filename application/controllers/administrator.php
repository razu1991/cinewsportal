<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    //For Already Login/Logout Check and Secure Back button....................
    public function __construct() {
        parent::__construct();

        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('super_admin', 'refresh');
        }
    }

    //Show Default/Main Page ............................
    public function index() {
        $this->load->view('admin/admin_login');
    }

    //Admin Authintication Check..............................
    public function check_admin_login() {
        $data = array();
        //$data['admin_email_address']=$_POST['admin_email_address'];
        $data['admin_email_addres'] = $this->input->post('admin_email_addres', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $result = $this->administrator_model->admin_login_check($data);
        $sdata = array();
        if ($result) {
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $sdata['access_level'] = $result->access_level;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        } else {
            $sdata['exception'] = 'Your Email/Password Is invalid!';
            $this->session->set_userdata($sdata);

            redirect('administrator');
        }
    }

    //..............End Administrator Controller................
}
