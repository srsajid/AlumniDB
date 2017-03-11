<?php

/**
 * Created by PhpStorm.
 * User: Sajid
 * Date: 03-03-17
 * Time: 12.10
 */
class SR_Admin_Base extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url_helper");
    }

    public function _remap($method, $params = array()) {
        if(!method_exists($this, $method)) {
            show_404();
        }
        $sessionData = $this->session->get_userdata();
        if (isset($sessionData['logged_in']) && $sessionData['logged_in'] === true) {
            return call_user_func_array(array($this, $method), $params);
        } else {
            redirect("/user/login");
        }
    }
}