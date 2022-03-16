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

	public function showDetail()
	{
		$username = $this->input->post('ID');
		$data['userdetail'] = $this->manageUsers_model->getUserDetail($username);
		$this->load->view('modal_manage-users', $data);
	}

	public function resetPassword()
	{
		$username = $this->input->post('username');
		$password = "password";
		$options = ['cost' => 12];

		$HashPassword = password_hash($password, PASSWORD_DEFAULT, $options);
		$this->manageUsers_model->resetPassword($username, $HashPassword);
	}

	public function saveChange()
	{
		$username = $this->input->post('username');
		// $isactive = $this->input->post('isactive-temp');
		
		$data = array(
			'IsActive' => $this->input->post('isactive'),
		);

		$this->manageUsers_model->saveChange($data, $username);
		
		redirect('admin/ManageUsers');
		
	}
}