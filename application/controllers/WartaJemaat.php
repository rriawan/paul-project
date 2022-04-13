<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WartaJemaat extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		// $this->load->model('auth_model');
		$this->load->model('userpage_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Warta Jemaat',
			'content' => 'user_wartajemaat',	
      'active_uri' => 'infogereja',
			'active_sub' => 'wartajemaat',
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}

	public function listData()
  {
    $loaddata = $this->userpage_model->getWartaJemaat()->result(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d M Y'); 
			// $btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT WARTA JEMAAT'><i class='far fa-edit'></i></a>";
      // $linkpdf = "<a href='".base_url()."pdf-folder/".$list->pdf_doc."'>".$list->pdf_doc."</a>";
			
			$linkpdf = '<a href="'.base_url().'WartaJemaat/download/'.$list->pdf_doc.'">'.$list->pdf_doc.'</a>';
			$row = array();
			$row[] = $list->Judul;
			$row[] = '<i class="fas fa-download"></i>&nbsp;&nbsp;'.$linkpdf;
			$row[] = $dateformat;
			// $row[] = $list->UpdateBy;
      // $row[] = $btnSelect;
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