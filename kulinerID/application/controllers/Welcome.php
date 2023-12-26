<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('username')) {
            $data['username'] = $this->session->userdata('username');
            $this->load->view('welcome', $data);
        } else {
            $this->load->view('unauthorized');
        }
    }
}
