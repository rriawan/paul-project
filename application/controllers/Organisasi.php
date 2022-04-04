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
		// $data = array();
		$dtcount = $this->userpage_model->countKoinonia()->result();
		// foreach($dtcount as $key => $value) 
		// {
				// $products[] = $this->sales_model->get_productdetails($key)
		
			// $dt = $this->userpage_model->getDataKoinonia(1)->result_array();
			// $grouped_types = array();
			// foreach($dt as $type){
			// 			$grouped_types[$type['id_seksi']]['nama_seksi'][] = $type['nama_seksi']; 
			// }
			// ksort($grouped_types); 
			$data = array(
				'title' => 'Struktur Organisasi Koinonia',
				'content' => 'user_organisasi-dewan',
				'active_uri' => 'organisasi',
				'active_sub' => 'koinonia',
				'dataDewan' => $this->userpage_model->getDataKoinonia(0)->result(),
				// 'dataSeksi' => $grouped_types, 
				// 'seksi1' => $this->userpage_model->getSeksiKoinonia(1)->result(),
				'dataSeksi' => $this->userpage_model->getDataKoinonia(1)->result_array(),
				'dataGroup' => $this->userpage_model->countKoinonia()->row_array(),
				'dataHead' => 'Dewan Koinonia',
				// 'dataHeadSeksi' => $this->userpage_model->getDetailSeksi($value->id_seksi)->row()

			);
		// }
		
		$this->load->view('user-layout/wrappers.php', $data);
	}
	public function getMarturia()
	{
		// $idseksi = $this->userpage_model->getGroupSeksi()->id_seksi;
		
		$data = array(
			'title' => 'Struktur Organisasi Marturia',
			'content' => 'user_organisasi-dewan',
			'active_uri' => 'organisasi',
			'active_sub' => 'marturia',
			'dataDewan' => $this->userpage_model->getDataMarturia(0)->result(),
			'dataSeksi' => $this->userpage_model->getDataMarturia(1)->result(),
			'dataHead' => 'Dewan Marturia'

		);
		$this->load->view('user-layout/wrappers.php', $data);
	}
	public function getDiakonia()
	{
		$data = array(
			'title' => 'Struktur Organisasi Diakonia',
			'content' => 'user_organisasi-dewan',
			'active_uri' => 'organisasi',
			'active_sub' => 'diakonia',
			'dataDewan' => $this->userpage_model->getDataDiakonia(0)->result(),
			'dataSeksi' => $this->userpage_model->getDataDiakonia(1)->result(),
			'dataHead' => 'Dewan Diakonia'

		);
		$this->load->view('user-layout/wrappers.php', $data);
	}
}