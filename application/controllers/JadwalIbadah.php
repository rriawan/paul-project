<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalIbadah extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		$this->load->model('userpage_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Jadwal Ibadah',
			'content' => 'user_jadwalibadah',	
      'active_uri' => 'infogereja',
			'active_sub' => 'jadwalibadah',
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}

	public function listData()
  {
    $loaddata = $this->userpage_model->getJadwalIbadah()->result(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      // $date = new DateTime($list->UpdateDate);
      // $dateformat = $date->format('d M Y'); 
			$row = array();
			$row[] = $list->keterangan_jenis;
			$row[] = $list->nama_jadwal;
			$row[] = $list->hari;
			$row[] = $list->keterangan;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }
	function download($filename = NULL) {
		$this->load->helper('download');
		$data = file_get_contents(base_url('/pdf-folder/'.$filename));
		force_download($filename, $data);
	}

}