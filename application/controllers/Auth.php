<?php

class Auth extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library("session");
		$this->load->helper("url_helper");
		$this->load->model('user_model');
		
	}

	public function user_login() {
		
		$data = array();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			$data['success'] = $this->session->flashdata("success");
			$this->load->view('user/auth/login', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->user_model->resolve_user_login($username, $password)) {
				$user_id = $this->user_model->get_user_id_from_username($username);
				$user    = $this->user_model->get_user($user_id);
				$this->session->set_userdata('user_id', (int)$user->id);
				$this->session->set_userdata('username', (string)$user->username);
				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('is_admin', true);
				redirect("admin/member/lists");
			} else {
				$data['error'] = 'Wrong username or password.';
				$this->load->view('user/auth/login', $data);
			}
		}
	}

	public function user_logout() {
		$sessionData = $this->session->get_userdata();
		if (isset($sessionData['logged_in']) && $sessionData['logged_in'] === true) {
			foreach ($sessionData as $key => $value) {
				if(substr($key, 0, 1) != "_") {
					$this->session->unset_userdata($key);
				}
			}
			$this->session->set_flashdata("success", "User has logout successfully");
			redirect('/user/login');
		} else {
			redirect('/');
		}
	}
}
