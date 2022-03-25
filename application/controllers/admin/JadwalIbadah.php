<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalIbadah extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('jadwalibadah_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Jadwal Ibadah',
			'content' => 'admin_jadwal-ibadah',
			'active_uri' => 'jadwalibadah'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function jenisJadwal()
	{
		$loaddata = $this->jadwalibadah_model->jenisJadwal(); 
		$data = array();       
		
		foreach ($loaddata as $list) {
      $btnSelect = "<a href='javascript:void(0)' id_jenis='". $list->id_jenis."' class='edit-news' data-toggle='tooltip' title='EDIT JENIS JADWAL'>".$list->keterangan_jenis."</a>";
			$row = array();
      $row[] = $btnSelect;
			$data[] = $row;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	
	public function modalAddJenis()
	{
		$this->load->view('modal_add-jenisjadwal');	
	}

	public function insertJenis()
	{
			$data = [
					'keterangan_jenis' => $this->input->post('keterangan_jenis')
			];
			$this->jadwalibadah_model->insertJenis($data);
	}

	public function updateJenis()
	{
			$data = [
					'keterangan_jenis' => $this->input->post('keterangan_jenis')
			];
			$this->jadwalibadah_model->updateJenis($this->input->post('id_jenis'), $data);
	}

	public function modalEditJenis()
	{
		$id = $this->input->post('id_jenis');
		$data['jenisById'] = $this->jadwalibadah_model->getJenisById($id);
		$this->load->view('modal_edit-jenisjadwal', $data);	
	}

	public function listJadwal()
  {
    $loaddata = $this->jadwalibadah_model->listJadwal(); 
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			$btnSelect = "<a href='javascript:void(0)' id_jadwal='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT JADWAL IBADAH'><i class='far fa-edit'></i></a>";
      // $linkpdf = "<a href='".base_url()."pdf-folder/".$list->pdf_doc."'>".$list->pdf_doc."</a>";
			
			// $linkpdf = '<a href="'.base_url().'admin/Dashboard/download/'.$list->pdf_doc.'">'.$list->pdf_doc.'</a>';
			$row = array();
			$row[] = $list->keterangan_jenis;
			$row[] = $list->nama_jadwal;
			$row[] = $list->hari;
			$row[] = substr($list->keterangan, 0, 80)."...";
			$row[] = $list->UpdateBy;
			$row[] = $dateformat;
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
		$data['listJenis'] = $this->jadwalibadah_model->jenisJadwal();
		$this->load->view('modal_add-jadwalibadah', $data);	
	}

	public function insertData()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		
		$data = array(
			'id_jenis' => $this->input->post('jenisjadwal'),
			'nama_jadwal' => $this->input->post('nama_jadwal'),
			'hari' => $this->input->post('hari'),
			'keterangan' => $this->input->post('keterangan'),
			'UpdateBy' => $this->session->userdata('Username'),
			'UpdateDate' => $dateNow,
			);  
		$this->jadwalibadah_model->insertData($data);			
	}

	public function showModalEdit()
	{
		$id = $this->input->post('id_jadwal');
		$data['dataById'] = $this->jadwalibadah_model->getDataById($id);
		$data['listJenis'] = $this->jadwalibadah_model->jenisJadwal();
		$this->load->view('modal_edit-jadwalibadah', $data);	
	}

	public function updateData()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		$data = array(
			'id_jenis' => $this->input->post('jenisjadwal'),
			'nama_jadwal' => $this->input->post('nama_jadwal'),
			'hari' => $this->input->post('hari'),
			'keterangan' => $this->input->post('keterangan'),
			'UpdateBy' => $this->session->userdata('Username'),
			'UpdateDate' => $dateNow,
			);  
		$this->jadwalibadah_model->updateData($this->input->post('id_jadwal'), $data);
	}

	function download($filename = NULL) {
		$this->load->helper('download');
		$data = file_get_contents(base_url('/pdf-folder/'.$filename));
		force_download($filename, $data);
	}
}