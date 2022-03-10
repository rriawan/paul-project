<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
	}

	public function index()
	{		
		$data = array(
			'title' => 'Dashboard',
			'content' => 'v_dashboard',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}
}