<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
	}

	public function index()
	{		
		$data = array(
			'title' => 'Dashboard',
			'content' => 'admin_dashboard',
			'active_uri' => 'dashboard'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}
}