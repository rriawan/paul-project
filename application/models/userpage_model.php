<?php

class userpage_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function detailWartaTerkini($id)
  {
    $sql = "SELECT * FROM warta_terkini where id = $id";
    return $this->db->query($sql)->row();
  }
  
  function getProfileGereja()
  {
    $sql = "SELECT * FROM profile_gereja";
    return $this->db->query($sql);
  }

  function getRenunganUser()
  {
    $sql = "SELECT A.*, B.Name FROM renungan_harian A JOIN user B ON A.UpdateBy = B.Username LIMIT 1";
    return $this->db->query($sql)->row();
  }

  function getWartaJemaat()
  {
    $sql = "SELECT * FROM warta_jemaat";
    return $this->db->query($sql);
  }

  function getDataPendeta()
  {
    $sql = "SELECT A.*, B.*, C.* FROM struktur_organisasi A
            JOIN organisasi B on A.id_organisasi = b.id_organisasi
            JOIN jabatan C on A.id_jabatan = C.id_jabatan
            WHERE A.id_organisasi = 1";
    return $this->db->query($sql);
  }

  function getDataFungsionaris()
  {
    $sql = "SELECT A.*, B.*, C.* FROM struktur_organisasi A
            JOIN organisasi B on A.id_organisasi = b.id_organisasi
            JOIN jabatan C on A.id_jabatan = C.id_jabatan
            WHERE A.id_organisasi = 2";
    return $this->db->query($sql);
  }

  // function getDewanKoinonia()
  // {
  //   $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan FROM struktur_organisasi a
  //           JOIN organisasi b on a.id_organisasi = b.id_organisasi
  //           JOIN jabatan c on a.id_jabatan = c.id_jabatan
  //           JOIN dewan d on a.id_dewan = d.id_dewan
  //           WHERE a.is_seksi = 0
  //           AND a.id_organisasi = 3
  //           AND a.id_dewan = 1";
  //   return $this->db->query($sql);
  // }

  function getKoinonia($is_seksi)
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = $is_seksi
            AND a.id_organisasi = 3
            AND a.id_dewan = 1";
    return $this->db->query($sql);

  }

  function getMarturia($is_seksi)
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = $is_seksi
            AND a.id_organisasi = 3
            AND a.id_dewan = 2";
    return $this->db->query($sql);

  }

  function getDiakonia()
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = 1
            AND a.id_organisasi = 3
            AND a.id_dewan = 3";
    return $this->db->query($sql);

  }
  

  
}