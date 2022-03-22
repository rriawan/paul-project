<?php

class organisasi_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}
  
	function listOrganisasi()
	{
		$sql = "SELECT * FROM organisasi";
		return $this->db->query($sql)->result();
	}

	function listDewan()
	{
		$sql = "SELECT * FROM dewan";
		return $this->db->query($sql)->result();
	}
	
	function listSeksi()
	{
		$sql = "SELECT A.*, B.* FROM seksi A
						JOIN dewan B on A.id_dewan = B.id_dewan";
	return $this->db->query($sql)->result();						
	}

	function listJabatan()
	{
		$sql = "SELECT * FROM jabatan";
		return $this->db->query($sql)->result();
	}

	function listStruktur()
	{
		$sql = "SELECT a.id, A.Nama, B.nama_organisasi, C.nama_jabatan, A.no_telp, A.img_url FROM struktur_organisasi A
						JOIN organisasi B ON A.id_organisasi = B.id_organisasi
						JOIN jabatan C ON A.id_jabatan = C.id_jabatan
						WHERE A.is_seksi = 0";
		return $this->db->query($sql)->result();
	}

	function listSeksiDewan()
	{
		$sql = "SELECT a.id, A.Nama, B.nama_organisasi, C.nama_dewan, D.nama_seksi, E.nama_jabatan, A.no_telp, A.img_url FROM struktur_organisasi A
						JOIN organisasi B ON A.id_organisasi = B.id_organisasi
						JOIN dewan C ON A.id_dewan = C.id_dewan
						JOIN seksi D ON A.id_seksi = D.id_seksi
						JOIN jabatan E ON A.id_jabatan = E.id_jabatan
						WHERE A.is_seksi = 1";
		return $this->db->query($sql)->result();
	}

	function insertStruktur($data)
	{
		$sql = "INSERT INTO struktur_organisasi (Nama, is_seksi, id_organisasi, id_dewan, id_seksi, id_jabatan, no_telp, img_url)
						VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
	}

	function updateStruktur($id, $data)
	{
		$sql = "UPDATE struktur_organisasi SET 
									Nama = ?, 
									is_seksi = ?, 
									id_organisasi = ?, 
									id_dewan = ?, 
									id_seksi = ?, 
									id_jabatan = ?, 
									no_telp = ?, 
									img_url = ?
						WHERE id = $id";
		return $this->db->query($sql, $data);
	}

	function getStrukturById($id)
	{
		$sql = "SELECT a.id, A.Nama, A.id_organisasi, B.nama_organisasi, C.id_jabatan, C.nama_jabatan, A.no_telp, A.img_url FROM struktur_organisasi A
						JOIN organisasi B ON A.id_organisasi = B.id_organisasi
						JOIN jabatan C ON A.id_jabatan = C.id_jabatan
						WHERE A.is_seksi = 0 AND id = $id";
		return $this->db->query($sql)->row();
	}

}