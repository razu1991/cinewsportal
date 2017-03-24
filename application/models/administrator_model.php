<?php

class Administrator_Model extends CI_Model {

    //Fetch If Inputed $data is Exist in Database.........................
    public function admin_login_check($data) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $data['admin_email_addres']);
        $this->db->where('admin_password', md5($data['admin_password']));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
