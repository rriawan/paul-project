<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaranPengguna extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('saranpengguna_model');

	}
  	
  public function index()
	{		
    $data = array(
			'title' => 'Saran Pengguna',
			'content' => 'admin_saran-pengguna',
			'active_uri' => 'saranpengguna',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

  public function getListSaran()
  {
    $loaddata = $this->saranpengguna_model->getListSaran(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      $icon = "";
      if($list->IsRead == false){
        $icon = "<i class='far fa-envelope'></i>";
      }else if($list->IsRead == true){
        $icon = "<i class='far fa-envelope-open'></i>";
      }
      
      $date = new DateTime($list->CreateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
      
			$row = array();
			$row[] = $list->Name;
			$row[] = $icon;
			$row[] = "<a href='javascript:void(0)' ItemID='".$list->id."' class='btn-read' data-toggle='tooltip' title='Klik untuk membaca detail'>".substr($list->Message, 0, 80)."...</a>";
      $row[] = $dateformat;
			$row[] = $list->ReadBy;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }

  public function ReadMessage()
  {
    $idMessage = $this->input->post('ItemID');
    $useradmin = $this->session->userdata('Username');
    $updateReadBy = $this->saranpengguna_model->updateReadBy($useradmin, $idMessage);
    if($updateReadBy){
      $data['msgdetail'] = $this->saranpengguna_model->getMessageDetail($idMessage);
      $this->load->view('modal_detail-message', $data);
    }

  }

}