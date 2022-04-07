<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WartaTerkini extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('wartaTerkini_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Warta Terkini',
			'content' => 'admin_warta-terkini',
			'active_uri' => 'wartaterkini',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

  public function listWartaTerkini()
  {
    $loaddata = $this->wartaTerkini_model->listWartaTerkini(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			$btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT WARTA TERKINI'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = substr(nl2br($list->PesanWartaTerkini), 0, 100)."...";
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

	public function showModalAdd()
	{
		$this->load->view('modal_add-wartaterkini');	
	}

	public function insertWartaTerkini()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		$data = array(
			'PesanWartaTerkini' => $this->input->post('message'),
			'UpdateBy' => $this->input->post('updateby'),
			'UpdateDate' => $dateNow
		);
		$process = $this->wartaTerkini_model->insertWartaTerkini($data);

		if($process == TRUE){
			redirect('admin/WartaTerkini');
		}else{
			echo "Gagal";
		}

	}

  public function ModalWartaTerkini()
  {
    $id = $this->input->post('ItemID');
    $data['wartaterkinidetail'] = $this->wartaTerkini_model->detailWartaTerkini($id);
    $this->load->view('modal_warta-terkini', $data);
  }

  public function SaveWartaTerkini()
  {      
    $dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
    $id = $this->input->post('id');
    $data = array(
      'PesanWartaTerkini' => $this->input->post('message'),
      'UpdateBy' => $this->input->post('updateby'),
      'UpdateDate' => $dateNow
    );
    $this->wartaTerkini_model->updateWartaTerkini($data, $id);

    redirect('admin/WartaTerkini');
  }
}