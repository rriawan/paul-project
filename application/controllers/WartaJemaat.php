<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WartaJemaat extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('userpage_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Warta Jemaat',
			'content' => 'user_wartajemaat',	
      'active_uri' => 'wartajemaat',
      'wartaJemaat' => $this->userpage_model->getProfileGereja()->result()
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}
}