<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
    $data = array(
      'title' => 'Login to Your Account',
    );
		$this->load->view('v_login', $data, FALSE);	
		
	}

	public function ProsesLogin(){
		$Username = $this->input->post('username');
		$Password = $this->input->post('password');

		if($this->auth_model->loginProses($Username, $Password)){
			$isadmin = $this->session->userdata('IsAdmin');
			if ($isadmin == true){
				redirect('admin/Dashboard');
			}else {
				redirect('Home');
			}
		}else {
			$this->session->set_flashdata('error' , 'Username / Password Anda Salah!');
			redirect('Login');
		}		
	}

	public function Logout()
	{
		$this->session->unset_userdata('Username');
		$this->session->unset_userdata('Name');
		$this->session->unset_userdata('IsAdmin');
		$this->session->unset_userdata('is_login');
		redirect('/');
	}

}
