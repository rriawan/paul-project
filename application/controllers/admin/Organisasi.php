<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

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
			'title' => 'Organisasi',
			'content' => 'admin_organisasi',
			'active_uri' => 'organisasi',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

  public function listOrganisasi()
  {
    $loaddata = $this->organisasi_model->listOrganisasi(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' IdOrganisasi='". $list->id_organisasi."' class='edit-news' data-toggle='tooltip' title='EDIT ORGANISASI'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->nama_organisasi;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }

  public function listDewan()
  {
    $loaddata = $this->organisasi_model->listDewan(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' IdDewan='". $list->id_dewan."' class='edit-news' data-toggle='tooltip' title='EDIT DEWAN'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->nama_dewan;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }
  public function listSeksi()
  {
    $loaddata = $this->organisasi_model->listSeksi(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' IdSeksi='". $list->id_seksi."' class='edit-news' data-toggle='tooltip' title='EDIT SEKSI'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->nama_dewan;
			$row[] = $list->nama_seksi;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }
  public function listJabatan()
  {
    $loaddata = $this->organisasi_model->listJabatan(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' IdJabatan='". $list->id_jabatan."' class='edit-news' data-toggle='tooltip' title='EDIT JABATAN'><i class='far fa-edit'></i></a>";
      
			$row = array();
			$row[] = $list->nama_jabatan;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }

	public function showModalAddOrg()
	{
		$this->load->view('modal_add-orglist');	
	}

	public function showModalEditOrg()
	{
		$id = $this->input->post('IdOrganisasi');
		$data['dataById'] = $this->organisasi_model->showOrgById($id);
		$this->load->view('modal_edit-orglist', $data);
	}

	public function insertOrganisasi()
	{
		$organisasi = $this->input->post('organisasi');
		$this->organisasi_model->insertOrgList($organisasi);
	}
	public function updateOrganisasi()
	{
		$id = $this->input->post('id_organisasi');
		$nm_org = $this->input->post('organisasi');
		$this->organisasi_model->updateOrgList($nm_org, $id);
	}
}
