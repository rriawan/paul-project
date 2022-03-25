<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileGereja extends CI_Controller {

	public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->auth_model->isLogin();
    $this->auth_model->isAdmin();
		$this->load->model('profile_model');
	}

	public function index()
	{		
		$data = array(
			'title' => 'Profile Gereja',
			'content' => 'admin_profile-gereja',
			'active_uri' => 'profilegereja'
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function listData()
  {
    $loaddata = $this->profile_model->listData(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
      $date = new DateTime($list->UpdateDate);
      $dateformat = $date->format('d-m-Y H:i:s'); 
			$btnSelect = "<a href='javascript:void(0)' ItemID='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT WARTA JEMAAT'><i class='far fa-edit'></i></a>";
      // $linkpdf = "<a href='".base_url()."pdf-folder/".$list->pdf_doc."'>".$list->pdf_doc."</a>";
			
			// $linkpdf = '<a href="'.base_url().'admin/Dashboard/download/'.$list->pdf_doc.'">'.$list->pdf_doc.'</a>';
			$row = array();
			$row[] = $list->img_url;
			$row[] = $list->Judul;
			$row[] = substr($list->Rincian, 0, 80)."...";
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
		$this->load->view('modal_add-profile-gereja');	
	}

	public function insertData()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		// $new_name = $dateNow.$_FILES["pdf_file"]['name'];
		// $config['file_name'] = $new_name;
		$config['upload_path']="./img-folder";
		$config['allowed_types']='jpg|jpeg|png';
		
		$this->load->library('upload',$config);
		if($this->upload->do_upload("img_file")){
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
			'img_url' => $data['upload_data']['file_name'],
			'Judul' => $this->input->post('judul'),
			'Rincian' => $this->input->post('rincian'),
			'UpdateBy' => $this->session->userdata('Username'),
			'UpdateDate' => $dateNow,
			);  
		$result= $this->profile_model->insertData($data1);
			if ($result == TRUE) {
					echo "true";
			}
		}
	}

	public function showModalEdit()
	{
		$id = $this->input->post('ItemID');
		$data['dataById'] = $this->profile_model->getDataById($id);
		$this->load->view('modal_edit-profile-gereja', $data);	
	}

	public function updateData()
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		$img_old = $this->input->post("img_old");
		$img = $img_old;
		
		$allow_update = true;
		$this->load->library('upload');
		$config['upload_path'] = './img-folder';
		$config['allowed_types'] = 'jpg|jpeg|png';
		// $config['max_size'] = 2000;
		$this->upload->initialize($config);
		if($_FILES["img_file"]["error"] == 0){
			if($this->upload->do_upload('img_file')){
					$upload = $this->upload->data();
					$img = $upload["file_name"];			
			}else{
					$allow_update = false;
			}
		}
		if($allow_update){
			$data = [
					'img_url' => $img,
					'Judul' => $this->input->post('judul'),
					'Rincian' => $this->input->post('rincian'),
					'UpdateBy' => $this->session->userdata('Username'),
					'UpdateDate' => $dateNow,					
			];
			if($this->profile_model->updateData($this->input->post("id_profile"),$data)){
					if($img != $img_old && $img_old != "")
						unlink('./img-folder/'.$img_old);
			}
			else{
						unlink('./img-folder/'.$img_old);							
			}
		}
	}

	function download($filename = NULL) {
		$this->load->helper('download');
		$data = file_get_contents(base_url('/pdf-folder/'.$filename));
		force_download($filename, $data);
	}
}