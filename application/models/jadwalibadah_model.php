<?php

class jadwalibadah_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function jenisJadwal()
  {
    $sql = "SELECT * FROM jenis_jadwalibadah";
    return $this->db->query($sql)->result();
  }

  function getJenisById($id)
  {
    $sql = "SELECT * FROM jenis_jadwalibadah WHERE id_jenis = $id";
    return $this->db->query($sql)->row();
  }

  function insertJenis($data)
  {
    $sql = "INSERT INTO jenis_jadwalibadah (keterangan_jenis)
						VALUES (?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
  }

  function updateJenis($id, $data)
  {
    $sql = "UPDATE jenis_jadwalibadah SET 
                      keterangan_jenis = ?
            WHERE id_jenis = $id";
    return $this->db->query($sql, $data);
  }

  function listJadwal()
  {
    $sql = "SELECT A.*, B.keterangan_jenis FROM jadwal_ibadah A
            JOIN jenis_jadwalibadah B ON a.id_jenis = b.id_jenis";
    return $this->db->query($sql)->result();
  }
  
  function insertData($data)
  {
    $sql = "INSERT INTO jadwal_ibadah (id_jenis, nama_jadwal, hari, keterangan, UpdateBy, UpdateDate)
						VALUES (?, ?, ?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
  }
  function getDataById($id)
  {
    $sql = "SELECT A.*, B.keterangan_jenis FROM jadwal_ibadah A
            JOIN jenis_jadwalibadah B ON A.id_jenis = B.id_jenis
            WHERE id = $id";
    return $this->db->query($sql)->row();
  }

  

  function updateData($id, $data)
  {
    $sql = "UPDATE jadwal_ibadah SET 
                      id_jenis = ?, 
                      nama_jadwal = ?, 
                      hari = ?,                       
                      keterangan = ?,                       
                      UpdateBy = ?, 
                      UpdateDate = ?
            WHERE id = $id";
    return $this->db->query($sql, $data);
  }
  // function updateWartaTerkini($data, $id)
  // {
  //   $sql = "UPDATE warta_terkini SET PesanWartaTerkini = ?, UpdateBy = ?, UpdateDate = ?
  //           WHERE id = $id";
  //   return $this->db->query($sql, $data);
  // }
}