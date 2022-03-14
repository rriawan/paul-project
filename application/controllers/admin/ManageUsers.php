<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUsers extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
		$this->load->model('manageUsers_model');
	}

	public function index()
	{		
    $data = array(
			'title' => 'Manage User',
			'content' => 'admin_manage-users',
			'active_uri' => 'manageuser',
			'listUser' => $this->manageUsers_model->getListUsers(),
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	// public function getListUsers()
	// {
	// 	$list = $this->manageUsers_model->getListUsers();
	// 	$data = array();

	// 	foreach ($list as $field) {
	// 		$row = array();

	// 		$row[] = $field->Name;
	// 		$row[] = $field->Username;
	// 		$row[] = $field->Email;
	// 		$row[] = $field->PhoneNumber;
	// 		$row[] = $field->IsActive;
	// 		$row[] = $field->CreateAt;
	// 	}
	// 	$output = array(
	// 		"data" => $data,
	// 	);
	// 	echo json_encode($output);
	// }
}