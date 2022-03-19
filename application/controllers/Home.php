<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('wartaTerkini_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'content' => 'user_home',			
			'active_uri' => 'home',
			'wartaterkini' => $this->wartaTerkini_model->detailWartaTerkini(1)
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}

}