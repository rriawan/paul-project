<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakPengurus extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
	}

	public function index()
	{		
		$data = array(
			'title' => 'Kontak Pengurus',
			'content' => 'admin_kontak-pengurus',
			'active_uri' => 'kontakpengurus'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}
}