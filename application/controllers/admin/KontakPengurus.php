<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakPengurus extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
		$this->load->model('kontakPengurus_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Kontak Pengurus',
			'content' => 'admin_kontak-pengurus',
			'active_uri' => 'kontakpengurus',
			'listpengurus' =>  $this->kontakPengurus_model->getListPengurus(),
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function showModalAdd()
	{
		$this->load->view('modal_add-pengurus');	
	}
	
	public function getDataAdd()
	{
		$loaddata = $this->kontakPengurus_model->getListDataAdd(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
			$btnSelect = "<a href='javascript:void(0)' ItemID='". $list->Username."' class='add-admin' data-toggle='tooltip' title='PILIH SEBAGAI PENGURUS'><i class='far fa-edit'></i></a>";
			
			// $checkbox = "<input type='checkbox' value='".$list->Username."'>";
			$row = array();			
			$row[] = $btnSelect;
			$row[] = $list->Name;
			$row[] = $list->Username;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	public function addNewPengurus()
	{
		$username = $this->input->post('ItemID');
		$getDetail = $this->kontakPengurus_model->getDataUser($username);
		$name = $getDetail->Name;
		$updateby = $this->session->userdata('Username');
		
		$proses = $this->kontakPengurus_model->addNewPengurus($name, $username, $updateby);
		if($proses){
			redirect('admin/KontakPengurus');
		}
	}

	function deletePengurus()
	{
		$id = $this->input->post('id');
		return $this->kontakPengurus_model->deletePengurus($id);
		
	}
}