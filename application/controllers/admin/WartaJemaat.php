<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WartaJemaat extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('wartaJemaat_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Warta Jemaat',
			'content' => 'admin_warta-jemaat',
			'active_uri' => 'wartajemaat',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function showModalAdd()
	{
		$this->load->view('modal_add-wartajemaat');	
	}

	public function showModalEdit()
	{
		$id = $this->input->post('ItemID');
		$data['wartaById'] = $this->wartaJemaat_model->getWartaById($id);
		$this->load->view('modal_edit-wartajemaat', $data);	
	}

	public function uploadWarta()
	{
		$config['upload_path']="./pdf-folder";
		$config['allowed_types']='pdf';
		// $config['max_size']=2000;
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');

		$this->load->library('upload',$config);
		if($this->upload->do_upload("pdf_file")){
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
			'Judul' => $this->input->post('judul'),
			'pdf_doc' => $data['upload_data']['file_name'],
			'UpdateBy' => $this->session->userdata('Username'),
			'UpdateDate' => $dateNow,
			);  
		$result= $this->wartaJemaat_model->insertWarta($data1);
			if ($result == TRUE) {
					echo "true";
			}
		}
	}

	public function updateWartaJemaat()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		$pdf_old = $this->input->post("pdf_old");
		$pdf = $pdf_old;
		
		$allow_update = true;
		$this->load->library('upload');
		$config['upload_path'] = './pdf-folder';
		$config['allowed_types'] = 'pdf';
		// $config['max_size'] = 2000;
		$this->upload->initialize($config);
		if($_FILES["pdf_file"]["error"] == 0){
			if($this->upload->do_upload('pdf_file')){
					$upload = $this->upload->data();
					$pdf = $upload["file_name"];			
			}else{
					$allow_update = false;
			}
		}
		if($allow_update){
			$data = [
					'Judul' => $this->input->post('judul'),
					'pdf_doc' => $pdf,
					'UpdateBy' => $this->session->userdata('Username'),
					'UpdateDate' => $dateNow,					
			];
			if($this->wartaJemaat_model->updateWartaJemaat($this->input->post("id_warta"),$data)){
					if($pdf != $pdf_old && $pdf_old != "")
						unlink('./pdf-folder/'.$pdf_old);
			}
			else{
						unlink('./pdf-folder/'.$pdf_old);							
			}
		}
	}

  public function listWartaJemaat()
  {
    $loaddata = $this->wartaJemaat_model->listWartaJemaat(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			$btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT WARTA JEMAAT'><i class='far fa-edit'></i></a>";
      // $linkpdf = "<a href='".base_url()."pdf-folder/".$list->pdf_doc."'>".$list->pdf_doc."</a>";
			
			$linkpdf = '<a href="'.base_url().'admin/WartaJemaat/download/'.$list->pdf_doc.'">'.$list->pdf_doc.'</a>';
			$row = array();
			$row[] = $list->Judul;
			$row[] = $linkpdf;
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
	function download($filename = NULL) {
		$this->load->helper('download');
		$data = file_get_contents(base_url('/pdf-folder/'.$filename));
		force_download($filename, $data);
	}

  // public function modalWartaJemaat()
  // {
  //   $id = $this->input->post('ItemID');
  //   $data['wartaterkinidetail'] = $this->wartaTerkini_model->detailWartaTerkini($id);
  //   $this->load->view('modal_warta-terkini', $data);
  // }

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