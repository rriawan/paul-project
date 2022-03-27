<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('userpage_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Tentang Gereja',
			'content' => 'user_about',	
      'active_uri' => 'about',
      'profileGereja' => $this->userpage_model->getProfileGereja()->result()
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}
}