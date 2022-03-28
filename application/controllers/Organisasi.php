<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		// $this->load->model('auth_model');
		$this->load->model('userpage_model');
	}

	// public function index()
	// {
	// 	$data = array(
	// 		'title' => 'Tentang Gereja',
	// 		'content' => 'user_about',	
  //     'active_uri' => 'about',
  //     'profileGereja' => $this->userpage_model->getProfileGereja()->result()
	// 	);
	// 	$this->load->view('user-layout/wrappers.php', $data, FALSE);
	// }

	public function getPendeta()
	{
		$data = array(
			'title' => 'Struktur Organisasi Pendeta',
			'content' => 'user_organisasi',
			'active_uri' => 'organisasi',
			'active_sub' => 'pendeta',
			'dataShow' => $this->userpage_model->getDataPendeta()->result(),
			'dataHead' => 'Pendeta'
		);
		$this->load->view('user-layout/wrappers.php', $data);
	}

	public function getFungsionaris()
	{
		$data = array(
			'title' => 'Struktur Organisasi Fungsionaris',
			'content' => 'user_organisasi',
			'active_uri' => 'organisasi',
			'active_sub' => 'fungsionaris',
			'dataShow' => $this->userpage_model->getDataFungsionaris()->result(),
			'dataHead' => 'Fungsionaris'

		);
		$this->load->view('user-layout/wrappers.php', $data);
	}

	public function getKoinonia()
	{
		$data = array(
			'title' => 'Struktur Organisasi Fungsionaris',
			'content' => 'user_organisasi',
			'active_uri' => 'organisasi',
			'active_sub' => 'fungsionaris',
			'dataShow' => $this->userpage_model->getDataFungsionaris()->result(),
			'dataHead' => 'Fungsionaris'

		);
		$this->load->view('user-layout/wrappers.php', $data);
	}
	// public function getDewan()
	// {
	// 	$data = array(
			// 'title' => 'Struktur Organisasi Dewan',
			// 'content' => 'user_organisasi',
			// 'active_uri' => 'organisasi',
			// 'active_sub' => 'fungsionaris',
			// 'dataShow' => $this->userpage_model->getDataFungsionaris()->result()
	// 	);
	// 	$this->load->view('user-layout/wrappers.php', $data);
	// }
}