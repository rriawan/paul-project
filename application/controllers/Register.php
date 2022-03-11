<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		// $this->auth_model->isLogin();
		// if($this->auth_model->isAdmin() == FALSE ){
		// 	redirect('Dashboard');
		// }
	}

	public function index()
	{
    $data = array(
      'title' => 'Register New Account',
    );
		$this->load->view('v_register', $data, FALSE);		
	}

	public function CreateAccount()
	{
		$Name = $this->input->post('name');
		$Username = $this->input->post('username');
		$Email = $this->input->post('email');
		$PhoneNumber = $this->input->post('phonenumber');
		$Password = $this->input->post('password');
		$options = ['cost' => 12];
		
		$HashPassword = password_hash($Password, PASSWORD_DEFAULT, $options);
		if($this->CheckUsername() > 0  ){
			$this->session->set_flashdata('usernameTaken', 'Username Sudah Digunakan!');
			// redirect('Register');
		}else {			
			$this->auth_model->register($Name, $Username, $Email, $PhoneNumber, $HashPassword);
			return $this->session->set_flashdata('successRegister', 'Sukses Mendaftar Akun Baru');	
			// redirect('Login');
			
		}		
	}

	public function CheckUsername()
	{
		$Username = $this->input->post('username');
		return $this->auth_model->checkUsername($Username)->num_rows() ;
	}
	// public function CheckNIK()
	// {
	// 	$NIK = $this->input->post('nik');
	// 	if($this->auth_model->checknik($NIK) > 0){
	// 		$this->session->set_flashdata('warning', 'NIK Sudah Terdaftar !');		
	// 	}else {
	// 		$this->session->set_flashdata('success', 'NIK Dapat Didaftarkan');
	// 	}			
	// }

	// public function CheckUsername()
	// {
	// 	$Username = $this->input->post('username');
	// 	if($this->auth_model->checkusername($Username) > 0 ){
	// 		$this->session->set_flashdata('warning', 'Username Sudah Terdaftar !');
	// 	}else {
	// 		$this->session->set_flashdata('success', 'Username Tersedia');
	// 	}
	// }

}
