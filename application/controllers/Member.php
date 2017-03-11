<?php

/**
 * Created by PhpStorm.
 * User: Sajid
 * Date: 02-03-17
 * Time: 20.34
 */
class Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index() {
        $config = array(
            array(
                'field' => 'member_id',
                'label' => 'Member ID',
                'rules' => 'required|max_length[50]|is_unique[member.member_id]'
            ),
            array(
                'field' => 'nick_name',
                'label' => 'Nick Name',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'full_name',
                'label' => 'full_name',
                'rules' => 'required|max_length[250]'
            ),
            array(
                'field' => 'phone_cell',
                'label' => 'Phone Number',
                'rules' => 'required|regex_match[/^[0-9\-\+]{9,15}$/]|is_unique[member.phone_cell]',
                'errors' => array(
                    'regex_match' => 'Enter a valid %s.',
                ),
            ),
            array(
                'field' => 'phone_work',
                'label' => 'Phone number',
                'rules' => 'regex_match[/^[0-9\-\+]{9,15}$/]',
                'errors' => array(
                    'regex_match' => 'Enter a valid %s.',
                ),

            ),
            array(
                'field' => 'phone_home',
                'label' => 'phone ',
                'rules' => 'regex_match[/^[0-9\-\+]{9,15}$/]',
                'errors' => array(
                    'regex_match' => 'Enter a valid %s.',
                ),
            ),
            array(
                'field' => 'mailing_address',
                'label' => 'Mailing Address',
                'rules' => 'required|max_length[500]'
            ),
            array(
                'field' => 'year_honors',
                'label' => 'Honers Year',
                'rules' => 'numeric|max_length[4]'
            ),
            array(
                'field' => 'year_masters',
                'label' => 'Masters Year',
                'rules' => 'numeric|max_length[4]'
            ),
            array(
                'field' => 'year_preliminary',
                'label' => 'Preliminary Year',
                'rules' => 'numeric|max_length[4]'
            ),
            array(
                'field' => 'Work_address',
                'label' => 'Work Address',
                'rules' => 'max_length[500]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[member.email]'
            ),
            array(
                'field' => 'date_of_birth',
                'label' => 'Date of Birth',
                'rules' => 'required'
            ),
            array(
                'field' => 'blood_group',
                'label' => 'Blood Group',
                'rules' => 'max_length[5]'
            ),
            array(
                'field' => 'marital_status',
                'label' => 'Marital Status',
                'rules' => 'max_length[15]'
            ),
            array(
                'field' => 'spouse_name',
                'label' => 'Spouse Name',
                'rules' => 'max_length[250]'
            )
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['error'] = $this->form_validation->error_array();
            $data['success'] = $this->session->flashdata("success");
            $this->load->view('member/form', $data);
        } else {
            $result = $this->member_model->save();
            $this->session->set_flashdata("success", "You have registered successfully");
            redirect("/");

        }
    }
}