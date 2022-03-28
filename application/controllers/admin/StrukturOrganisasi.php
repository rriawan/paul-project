<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturOrganisasi extends CI_Controller {

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
			'title' => 'Struktur Organisasi',
			'content' => 'admin_struktur-organisasi',
			'active_uri' => 'strukturorganisasi',
		);
		$this->load->view('layouts/wrappers.php', $data, FALSE);
	}

	public function listStruktur()
	{
		$loaddata = $this->organisasi_model->listStruktur(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' strukturId='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT ORGANISASI'><i class='far fa-edit'></i></a>";
      $image_arr = explode("/", "./temp-folder/".$list->img_url);
			$image_name = end($image_arr);
			$row = array();
			$row[] = $list->Nama;
			$row[] = $list->nama_organisasi;
			$row[] = $list->nama_jabatan;
			$row[] = $list->no_telp;
			$row[] = "<img style='width:70px; height:70px;' src='".base_url()."temp-folder/".$image_name."'>" ;
      $row[] = $btnSelect;
			$data[] = $row;
		}

		$output = array(
			"data" => $data,
		);
		//output dalam format JSON
		echo json_encode($output);
	}

	public function listSeksiDewan()
	{
		$loaddata = $this->organisasi_model->listSeksiDewan(); 
		
		$data = array();       
		
		foreach ($loaddata as $list) {
      
			$btnSelect = "<a href='javascript:void(0)' id_seksidewan='". $list->id."' class='edit-news' data-toggle='tooltip' title='EDIT SEKSI DEWAN'><i class='far fa-edit'></i></a>";
      $image_arr = explode("/", "./temp-folder/".$list->img_url);
			$image_name = end($image_arr);

			$row = array();
			$row[] = $list->Nama;
			// $row[] = $list->nama_organisasi;
			$row[] = $list->nama_dewan;
			$row[] = $list->nama_seksi;
			$row[] = $list->nama_jabatan;
			$row[] = $list->no_telp;
			$row[] = "<img style='width:70px; height:70px;' src='".base_url()."temp-folder/".$image_name."'>" ;
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
		$data['listOrganisasi'] = $this->organisasi_model->listOrganisasi();
		$data['listJabatan'] = $this->organisasi_model->listJabatan();
		$this->load->view('modal_add-struktur', $data);	
	}

	public function showModalEdit()
	{
		$id = $this->input->post('strukturId');
		$data['dataById'] = $this->organisasi_model->getStrukturById($id);
		$data['listOrganisasi'] = $this->organisasi_model->listOrganisasi();
		$data['listJabatan'] = $this->organisasi_model->listJabatan();
		$data['listDewan'] = $this->organisasi_model->listDewan();

		$this->load->view('modal_edit-struktur', $data);
	}

	public function getIfDewan()
	{
		// $dewan_id = $this->input->post('id',TRUE);
		$data = $this->organisasi_model->getIfDewan();
		echo json_encode($data);
	}
	public function showModalAddDewan()
	{
		// $id = $this->input->post('id_seksidewan');
		// $iddewan = $this->organisasi_model->getIdDewan($id)->id_dewan;
		// $data['dataById'] = $this->organisasi_model->getDewanById($id);
		$data['listOrganisasi'] = $this->organisasi_model->listOrganisasi();
		$data['listJabatan'] = $this->organisasi_model->listJabatan();
		$data['listDewan'] = $this->organisasi_model->listDewan();
		// $data['listSeksi'] = $this->organisasi_model->listSeksi();
		// $data['listSeksi'] = $this->organisasi_model->getSubDewan($iddewan);
		$this->load->view('modal_add-dewan', $data);
	}

	public function showModalEditDewan()
	{
		$id = $this->input->post('id_seksidewan');
		$iddewan = $this->organisasi_model->getIdDewan($id)->id_dewan;
		$data['dataById'] = $this->organisasi_model->getDewanById($id);
		$data['listOrganisasi'] = $this->organisasi_model->listOrganisasi();
		$data['listJabatan'] = $this->organisasi_model->listJabatan();
		$data['listDewan'] = $this->organisasi_model->listDewan();

		// $data['listSeksi'] = $this->organisasi_model->listSeksi();
		$data['listSeksi'] = $this->organisasi_model->getSubDewan($iddewan);
		$this->load->view('modal_edit-dewan', $data);
	}

	public function getSub()
	{
		$dewan_id = $this->input->post('id',TRUE);
		$data = $this->organisasi_model->getSubDewan($dewan_id);
		echo json_encode($data);
	}
  public function insertStruktur(){
		$config['upload_path']="./temp-folder";
		$config['allowed_types']='jpg|png';
		$config['max_size']=2000;
		$this->load->library('upload',$config);
		if($this->upload->do_upload("img_file")){
			$data = array('upload_data' => $this->upload->data());
			$is_dewan = $this->input->post('organisasiList');
			$valdewan = "";
			if($is_dewan != 3){
				$valdewan = NULL;
			} else {
				$valdewan = $this->input->post('dewanList');
			}
			$data1 = array(
			'Nama' => $this->input->post('nama'),
			'is_seksi' => 0,
			'id_organisasi' => $this->input->post('organisasiList'),
			'id_dewan' => $valdewan,
			'id_seksi' => NULL,
			'id_jabatan' => $this->input->post('jabatanList'),
			'no_telp' => $this->input->post('no_telp'),
			'img_url' => $data['upload_data']['file_name']
			);  
		$result= $this->organisasi_model->insertStruktur($data1);
			if ($result == TRUE) {
					echo "true";
			}
		}
	}
	
	function updateStruktur(){
		$image_old = $this->input->post("image_old");
		$image = $image_old;
		
		$allow_update = true;
		$this->load->library('upload');
		$config['upload_path'] = './temp-folder';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2000;
		$this->upload->initialize($config);
		if($_FILES["img_file"]["error"] == 0){
			if($this->upload->do_upload('img_file')){
					$upload = $this->upload->data();
					$image = $upload["file_name"];			
			}else{
					$allow_update = false;
			}
		}
		if($allow_update){
			$is_dewan = $this->input->post('organisasiList');
			$valdewan = "";
			if($is_dewan != 3){
				$valdewan = NULL;
			} else {
				$valdewan = $this->input->post('dewanList');
			}
			$data = [
					'Nama' => $this->input->post('nama'),
					'is_seksi' => 0,
					'id_organisasi' => $this->input->post('organisasiList'),
					'id_dewan' => $valdewan,
					'id_seksi' => NULL,
					'id_jabatan' => $this->input->post('jabatanList'),
					'no_telp' => $this->input->post('no_telp'),
					'img_url' => $image
			];
			if($this->organisasi_model->updateStruktur($this->input->post("id_struktur"),$data)){
					if($image != $image_old && $image_old != "")
						unlink('./temp-folder/'.$image_old);
			}
			else{
						unlink('./temp-folder/'.$image_old);							
			}
		}
	}

	public function insertSeksiDewan(){
		$config['upload_path']="./temp-folder";
		$config['allowed_types']='jpg|png';
		$config['max_size']=2000;
		$this->load->library('upload',$config);
		if($this->upload->do_upload("img_file")){
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
			'Nama' => $this->input->post('nama'),
			'is_seksi' => 1,
			'id_organisasi' => 3,
			'id_dewan' => $this->input->post('dewanList'),
			'id_seksi' => $this->input->post('seksiList'),
			'id_jabatan' => $this->input->post('jabatanList'),
			'no_telp' => $this->input->post('no_telp'),
			'img_url' => $data['upload_data']['file_name']
			);  
		$result= $this->organisasi_model->insertStruktur($data1);
			if ($result == TRUE) {
					echo "true";
			}
		}
	}

	function updateSeksiDewan(){
		$image_old = $this->input->post("image_old");
		$image = $image_old;
		
		$allow_update = true;
		$this->load->library('upload');
		$config['upload_path'] = './temp-folder';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 2000;
		$this->upload->initialize($config);
		if($_FILES["img_file"]["error"] == 0){
			if($this->upload->do_upload('img_file')){
					$upload = $this->upload->data();
					$image = $upload["file_name"];			
			}else{
					$allow_update = false;
			}
		}
		if($allow_update){
			$data = [
					'Nama' => $this->input->post('nama'),
					'is_seksi' => 1,
					'id_organisasi' => 3,
					'id_dewan' => $this->input->post('dewanList'),
					'id_seksi' => $this->input->post('seksiList'),
					'id_jabatan' => $this->input->post('jabatanList'),
					'no_telp' => $this->input->post('no_telp'),
					'img_url' => $image
			];
			if($this->organisasi_model->updateStruktur($this->input->post("id_seksidewan"),$data)){
					if($image != $image_old && $image_old != "")
						unlink('./temp-folder/'.$image_old);
			}
			else{
						unlink('./temp-folder/'.$image_old);							
			}
		}
	}
}
