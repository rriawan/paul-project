<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUsers extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
	}

	public function index()
	{		
    $data = array(
			'title' => 'Manage User',
			'content' => 'admin_manage-users',
			'active_uri' => 'manageuser'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}
}