<?php

class Welcome_Model extends CI_Model {

    public function select_all_published_header_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $this->db->where('header_category', 1);
        $this->db->order_by('category_id', 'ASE');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_menu_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $this->db->where('menubar_category', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_mid_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $this->db->where('mid_category', 1);
        $this->db->order_by('category_id', 'ASE');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_frontdesk_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $this->db->where('frontdesk_category', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_footer_Category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $this->db->where('footer_category', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_Tag() {
        $this->db->select('*');
        $this->db->from('tbl_tag');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_featured_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->where('featured_news', 1);
        $this->db->order_by('category_id', 'ASE');
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_breaking_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->where('breaking_news', 1);
        $this->db->order_by('category_id', 'ASE');
        $this->db->limit(5);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_latest_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->order_by('news_post_date_time', 'DESC');
        $this->db->limit(3);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_popular_news() {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->where('hit_count >', 1);
        $this->db->order_by('hit_count', 'DESC');
        $this->db->limit(5);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

//public function select_all_desk_news(){
//        $this->db->select('*');
//        $this->db->from('tbl_news');
//        $this->db->where('publication_status',1);
//        $this->db->where('desk_news',1);
//        $this->db->limit(3);
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//        return $result;
//}
//public function select_all_mid_news(){
//        $this->db->select('*');
//        $this->db->from('tbl_news');
//        $this->db->where('publication_status',1);
//        $this->db->where('mid_news',1);
//        $this->db->order_by('category_id','ASE');
//        $this->db->limit(3);
//        $query_result=$this->db->get();
//        $result=$query_result->result();
//        return $result;
//}
    public function select_news_by_category($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->order_by('category_id', 'DESC');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_category_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function user_login_check($data) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email_address', $data['user_email_address']);
        $this->db->where('user_password', $data['user_password']);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function save_user_info() {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', true);
        $data['user_email_address'] = $this->input->post('user_email_address', true);
        $data['user_phone_number'] = $this->input->post('user_phone_number', true);
        $data['user_password'] = $this->input->post('user_password', true);
        $this->db->insert('tbl_user', $data);
    }

    public function save_comments_info() {
        $data = array();
        $data['comments_description'] = $this->input->post('comments_description', true);
        $data['news_id'] = $this->input->post('news_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $this->db->insert('tbl_comments', $data);
    }

    public function published_comments_info($news_id) {
        $sql = "SELECT u.user_name,c.comments_description,c.post_date_time FROM tbl_user as u, tbl_comments as c WHERE c.user_id=u.user_id AND news_id='$news_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function ajax_email_check_info($email_address) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email_address', $email_address);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
