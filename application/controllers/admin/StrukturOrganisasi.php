<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturOrganisasi extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('organisasi_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Struktur Organisasi',
			'content' => 'admin_struktur-organisasi',
			'active_uri' => 'strukturorganisasi',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function listStruktur()
	{
		$loaddata = $this->organisasi_model->listStruktur(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' id='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT ORGANISASI'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->Nama;
			$row[] = $list->nama_organisasi;
			$row[] = $list->nama_jabatan;
			$row[] = $list->no_telp;
			$row[] = $list->img_url;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	public function listSeksiDewan()
	{
		$loaddata = $this->organisasi_model->listSeksiDewan(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' id='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT SEKSI DEWAN'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->Nama;
			// $row[] = $list->nama_organisasi;
			$row[] = $list->nama_dewan;
			$row[] = $list->nama_seksi;
			$row[] = $list->nama_jabatan;
			$row[] = $list->no_telp;
			$row[] = $list->img_url;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}
  
}
