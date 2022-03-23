<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RenunganHarian extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('renunganHarian_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Renungan Harian',
			'content' => 'admin_renungan-harian',
			'active_uri' => 'renunganharian',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function getRenunganHarian()
  {
    $loaddata = $this->renunganHarian_model->getRenunganHarian(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			$btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT RENUNGAN HARIAN'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = substr(nl2br($list->Renungan), 0, 100)."...";
			$row[] = $dateformat;
			$row[] = $list->UpdateBy;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }

  public function showModalRenungan()
  {
    $id = $this->input->post('ItemID');
    $data['renunganharian'] = $this->renunganHarian_model->detailRenunganHarian($id);
    $this->load->view('modal_renungan-harian', $data);
  }

  public function saveRenungan()
  {      
    $dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
    $id = $this->input->post('id');
    $data = array(
      'Renungan' => $this->input->post('renungan'),
      'UpdateBy' => $this->input->post('updateby'),
      'UpdateDate' => $dateNow
    );
    $this->renunganHarian_model->updateRenunganHarian($data, $id);

    redirect('admin/RenunganHarian');
  }
}