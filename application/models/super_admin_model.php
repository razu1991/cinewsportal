<?php

class Super_Admin_Model extends CI_Model {

    public function save_category_info($data) {
        $data = array();
        //$data['category_name']=$_POST['category_name'];
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['header_category'] = $this->input->post('header_category', true);
        $data['mid_category'] = $this->input->post('mid_category', true);
        $data['menubar_category'] = $this->input->post('menubar_category', true);
        $data['frontdesk_category'] = $this->input->post('frontdesk_category', true);
        $data['footer_category'] = $this->input->post('footer_category', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_category_by_id($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_by_id($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function delete_category_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    public function select_category_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    //Start Tag Section................
    public function save_tag_info($data) {
        $data = array();
        $data['tag_name'] = $this->input->post('tag_name', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_tag', $data);
    }

    public function select_all_tag() {
        $this->db->select('*');
        $this->db->from('tbl_tag');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function unpublished_tag_by_id($tag_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('tag_id', $tag_id);
        $this->db->update('tbl_tag');
    }

    public function published_tag_by_id($tag_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('tag_id', $tag_id);
        $this->db->update('tbl_tag');
    }

    public function delete_tag_by_id($tag_id) {
        $this->db->where('tag_id', $tag_id);
        $this->db->delete('tbl_tag');
    }

    public function select_tag_by_id($tag_id) {
        $this->db->select('*');
        $this->db->from('tbl_tag');
        $this->db->where('tag_id', $tag_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_tag_info() {
        $data = array();
        $data['tag_name'] = $this->input->post('tag_name', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $tag_id = $this->input->post('tag_id', true);
        $this->db->where('tag_id', $tag_id);
        $this->db->update('tbl_tag', $data);
    }

    //End Tag Section.......................
    public function save_news_info($data) {
        $this->db->insert('tbl_news', $data);
    }

    public function select_all_news() {
        $sql = "SELECT n.news_id,n.news_title,n.author_name,n.publication_status,n.breaking_news,n.featured_news,c.category_name FROM tbl_news as n,tbl_category as c WHERE n.category_id=c.category_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function published_news_by_id($news_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function unpublished_news_by_id($news_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news');
    }

    public function select_news_by_id($news_id) {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $news_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_news_by_id($news_id) {
        $data = array();
        $data['news_title'] = $this->input->post('news_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['news_summary'] = $this->input->post('news_summary', true);
        $data['full_news'] = $this->input->post('full_news', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->where('news_id', $news_id);
        $this->db->update('tbl_news', $data);
    }

    //Start Comment ........
    public function select_all_comment() {
        $sql = "SELECT u.user_name,c.comments_description,c.comments_id,c.post_date_time,n.news_title FROM tbl_user as u, tbl_comments as c,tbl_news as n WHERE c.user_id=u.user_id AND c.news_id=n.news_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function delete_comment_by_id($comment_id) {
        $this->db->where('comments_id', $comment_id);
        $this->db->delete('tbl_comments');
    }

    //End Comment.............
}
