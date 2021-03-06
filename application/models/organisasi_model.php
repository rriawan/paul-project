<?php

class organisasi_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}
  
	function insertOrgList($organisasi)
	{
		$sql = "INSERT INTO organisasi (nama_organisasi) VALUES('$organisasi')";
		return $this->db->query($sql);
	}

	function updateOrgList($nm_org, $id)
	{
		$sql = "UPDATE organisasi SET nama_organisasi = '$nm_org' WHERE id_organisasi = $id";
		return $this->db->query($sql);
	}

	function insertDewanList($dewan)
	{
		$sql = "INSERT INTO dewan (nama_dewan) VALUES ('$dewan')";
		return $this->db->query($sql);
	}

	function updateDewanList($nm_dewan, $id)
	{
		$sql = "UPDATE dewan SET nama_dewan = '$nm_dewan' WHERE id_dewan = $id";
		return $this->db->query($sql);
	}

	function insertSeksiList($seksi, $id_dewan)
	{		
		$sql = "INSERT INTO seksi (id_dewan, nama_seksi) VALUES ($id_dewan, '$seksi')";
		return $this->db->query($sql);
	}

	function updateSeksiList($id_dewan, $nm_seksi, $id)
	{
		$sql = "UPDATE seksi SET id_dewan = $id_dewan, nama_seksi = '$nm_seksi' WHERE id_seksi = $id";
		return $this->db->query($sql);
	}

	function insertJabatanList($jabatan)
	{		
		$sql = "INSERT INTO jabatan (nama_jabatan) VALUES ('$jabatan')";
		return $this->db->query($sql);
	}

	function updateJabatanList($jabatan, $id)
	{
		$sql = "UPDATE jabatan SET nama_jabatan = '$jabatan' WHERE id_jabatan = $id";
		return $this->db->query($sql);
	}

	function showOrgById($id)
	{
		$sql = "SELECT * FROM organisasi WHERE id_organisasi = $id";
		return $this->db->query($sql)->row();
	}

	function showDewanById($id)
	{
		$sql = "SELECT * FROM dewan WHERE id_dewan = $id";
		return $this->db->query($sql)->row();
	}

	function showSeksiById($id)
	{
		$sql = "SELECT A.*, B.nama_dewan FROM seksi A JOIN dewan B ON a.id_dewan = b.id_dewan WHERE id_seksi = $id";
		return $this->db->query($sql)->row();
	}

	function showJabatanById($id)
	{
		$sql = "SELECT * FROM jabatan WHERE id_jabatan = $id";
		return $this->db->query($sql)->row();
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

	function getIfDewan()
	{
		$sql = "SELECT * FROM dewan";
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
		$sql = "SELECT a.id, A.Nama, A.id_organisasi, B.nama_organisasi, C.id_jabatan, C.nama_jabatan, D.id_dewan, D.nama_dewan, A.no_telp, A.img_url FROM struktur_organisasi A
						JOIN organisasi B ON A.id_organisasi = B.id_organisasi
						JOIN jabatan C ON A.id_jabatan = C.id_jabatan
						LEFT JOIN dewan D ON A.id_dewan = D.id_dewan
						WHERE A.is_seksi = 0 AND A.id = $id";
		return $this->db->query($sql)->row();
	}

	function getDewanById($id)
	{
		$sql = "SELECT a.id, A.Nama, A.id_organisasi, B.nama_organisasi, C.id_jabatan, C.nama_jabatan, 
						A.id_dewan, D.nama_dewan, A.id_seksi, E.nama_seksi, A.no_telp, A.img_url FROM struktur_organisasi A
						JOIN organisasi B ON A.id_organisasi = B.id_organisasi
						JOIN jabatan C ON A.id_jabatan = C.id_jabatan
						JOIN dewan D ON A.id_dewan = D.id_dewan
						JOIN seksi E ON A.id_seksi = E.id_seksi
						WHERE A.is_seksi = 1 AND A.id = $id";
		return $this->db->query($sql)->row();
	}

	function getSubDewan($id)
	{
		$sql = "SELECT * FROM seksi WHERE id_dewan = $id";
		return $this->db->query($sql)->result();
	}

	function getIdDewan($id)
	{
		$sql = "SELECT id_dewan FROM struktur_organisasi WHERE id = $id";
		return $this->db->query($sql)->row();
	}
}