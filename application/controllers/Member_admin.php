<?php

/**
 * Created by PhpStorm.
 * User: Sajid
 * Date: 03-03-17
 * Time: 19.58
 */
class Member_Admin extends SR_Admin_Base {

    public function __construct() {
        parent::__construct();
        $this->load->helper("view_helper");
        $this->load->model("member_model");
    }

    public function lists() {
        $offset = (int) $this->input->get("offset");
        $data = array(
            'members' => $this->member_model->get_members(20, $offset),
            'total' => $this->member_model->get_count()
        );
        $this->load->view('admin/templates/header', array('title' => "Member List", 'active' => 'member'));
        $this->load->view('admin/member/list', $data);
        $this->load->view('admin/templates/footer');
    }
}