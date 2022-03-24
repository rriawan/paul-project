<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('pemasukan_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Dashboard',
			'content' => 'admin_dashboard',
			'active_uri' => 'dashboard'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function showModalAdd()
	{
		$this->load->view('modal_add-pemasukan');	
	}

	public function insertData()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		// $new_name = $dateNow.$_FILES["pdf_file"]['name'];
		// $config['file_name'] = $new_name;
		$config['upload_path']="./pdf-folder";
		$config['allowed_types']='pdf|jpg|jpeg|png';
		
		// $config['max_size']=2000;
		$penerimaan = floatval(preg_replace("/[^-0-9\.]/","",$this->input->post('penerimaan')));
		$pengeluaran = floatval(preg_replace("/[^-0-9\.]/","",$this->input->post('pengeluaran')));
		$last_saldo = $this->pemasukan_model->getLastSaldo()->Saldo;
		$tmbh = $last_saldo+$penerimaan;
		$saldo_akhir = $tmbh-$pengeluaran;

		$this->load->library('upload',$config);
		if($this->upload->do_upload("pdf_file")){
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
			'Tanggal' => $this->input->post('tanggal'),
			'pdf_doc' => $data['upload_data']['file_name'],
			'Uraian' => $this->input->post('uraian'),
			'Penerimaan' => $penerimaan,
			'Pengeluaran' => $pengeluaran,
			'Saldo' => $saldo_akhir,
			'UpdateBy' => $this->session->userdata('Username'),
			'UpdateDate' => $dateNow,
			);  
		$result= $this->pemasukan_model->insertData($data1);
			if ($result == TRUE) {
					echo "true";
			}
		}
	}

	public function listData()
  {
    $loaddata = $this->pemasukan_model->listData(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			// $btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT WARTA JEMAAT'><i class='far fa-edit'></i></a>";
      // $linkpdf = "<a href='".base_url()."pdf-folder/".$list->pdf_doc."'>".$list->pdf_doc."</a>";
			
			$linkpdf = '<a href="'.base_url().'admin/Dashboard/download/'.$list->pdf_doc.'">'.$list->pdf_doc.'</a>';
			$row = array();
			$row[] = $list->Tanggal;
			$row[] = $linkpdf;
			$row[] = $list->Uraian;
			$row[] = number_format($list->Penerimaan,2);
			$row[] = number_format($list->Pengeluaran,2);
			$row[] = number_format($list->Saldo,2);
			$row[] = $list->UpdateBy;
			$row[] = $dateformat;
      // $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
  }

	public function showModalEdit()
	{
		$id = $this->input->post('ItemID');
		$data['dataById'] = $this->pemasukan_model->getDataById($id);
		$this->load->view('modal_edit-pemasukan', $data);	
	}

	function download($filename = NULL) {
		$this->load->helper('download');
		$data = file_get_contents(base_url('/pdf-folder/'.$filename));
		force_download($filename, $data);
	}
}