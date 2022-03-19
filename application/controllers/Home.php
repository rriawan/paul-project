<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'content' => 'user_home',			
			'active_uri' => 'home'
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}
}