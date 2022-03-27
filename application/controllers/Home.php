<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('userpage_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'content' => 'user_home',			
			'active_uri' => 'home',
			'wartaterkini' => $this->userpage_model->detailWartaTerkini(1),
			'renunganHarian' => $this->userpage_model->getRenunganUser()
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}

}