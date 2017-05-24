<?php
class Member_Model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function save($id = 0) {
        $this->load->helper('url');
        $data = array(
            'member_id' => $this->input->post('member_id'),
            'nick_name' => $this->input->post('nick_name'),
            'profession' => $this->input->post('profession'),
            'designation' => $this->input->post('designation'),
            'full_name' => $this->input->post('full_name'),
            'phone_work' => $this->input->post('phone_work'),
            'phone_home' => $this->input->post('phone_home'),
            'phone_cell' => $this->input->post('phone_cell'),
            'mailing_address' => $this->input->post('mailing_address'),
            'permanent_address' => $this->input->post('permanent_address'),
            'email' => $this->input->post('email'),
            'date_of_birth' => $this->input->post('date_of_birth'),
            'blood_group' => $this->input->post('blood_group'),
            'marital_status' => $this->input->post('marital_status'),
            'year_honers' => $this->input->post('year_honers'),
            'batch_msc' => $this->input->post('batch_msc'),
            'year_preliminary' => $this->input->post('year_preliminary'),
            'spouse_name' => $this->input->post('spouse_name'),
        );

        if ($id == 0) {
            return $this->db->insert('member', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('member', $data);
        }
    }

    public function get_members($max, $offset, $searchText = '') {
        $query = $this->db->get('member');
        $this->db->limit($max, $offset);
        return $query->result();
    }

    public function get_count() {
        $this->db->from('member');
        return $this->db->count_all_results();
    }
}