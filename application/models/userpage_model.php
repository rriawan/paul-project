<?php

use LDAP\Result;

class userpage_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function detailWartaTerkini()
  {
    $sql = "SELECT * FROM warta_terkini ORDER BY id DESC LIMIT 1";
    return $this->db->query($sql)->row();
  }
  
  function getProfileGereja()
  {
    $sql = "SELECT * FROM profile_gereja";
    return $this->db->query($sql);
  }

  function getRenunganUser()
  {
    $sql = "SELECT A.*, B.Name FROM renungan_harian A JOIN user B ON A.UpdateBy = B.Username ORDER BY id DESC LIMIT 1";
    return $this->db->query($sql)->row();
  }

  function getWartaJemaat()
  {
    $sql = "SELECT * FROM warta_jemaat";
    return $this->db->query($sql);
  }

  function getJadwalIbadah()
  {
    $sql = "SELECT A.*, B.keterangan_jenis FROM jadwal_ibadah A
            JOIN jenis_jadwalibadah B ON a.id_jenis = b.id_jenis
            ORDER BY A.id";
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

  function getDataKoinonia($is_seksi)
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            LEFT JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = $is_seksi
            AND a.id_organisasi = 3
            AND a.id_dewan = 1";
    return $this->db->query($sql);

  }

  // function getDetailSeksi($idseksi)
  // {
  //   $sql = "SELECT * FROM seksi
  //           WHERE id_seksi = $idseksi";
  //   return $this->db->query($sql);
  // }
  // function getSeksiKoinonia($idseksi)
  // {
  //   $sql = "SELECT a.*, c.nama_jabatan, E.nama_seksi FROM struktur_organisasi a
  //           JOIN jabatan c on a.id_jabatan = c.id_jabatan
  //           LEFT JOIN seksi e on a.id_seksi = e.id_seksi
  //           WHERE a.is_seksi = 1
  //           AND a.id_organisasi = 3
  //           AND a.id_dewan = 1
  //           AND a.id_seksi = $idseksi
  //           ORDER BY a.id_jabatan";
  //   return $this->db->query($sql);
  // }
  // function getGroupSeksiKoinonia()
  // {
  //   $sql = "SELECT a.id_seksi, b.nama_seksi FROM struktur_organisasi a
  //           JOIN seksi b ON a.id_seksi = b.id_seksi
  //           WHERE a.is_seksi = 1
  //           group by a.id_seksi";
  //   return $this->db->query($sql)->result();
  // }

  function getDataMarturia($is_seksi)
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            LEFT JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = $is_seksi
            AND a.id_organisasi = 3
            AND a.id_dewan = 2";
    return $this->db->query($sql);

  }

  function getDataDiakonia($is_seksi)
  {
    $sql = "SELECT a.*, b.nama_organisasi, c.nama_jabatan, d.nama_dewan, E.nama_seksi FROM struktur_organisasi a
            JOIN organisasi b on a.id_organisasi = b.id_organisasi
            JOIN jabatan c on a.id_jabatan = c.id_jabatan
            JOIN dewan d on a.id_dewan = d.id_dewan
            LEFT JOIN seksi e on a.id_seksi = e.id_seksi
            WHERE a.is_seksi = $is_seksi
            AND a.id_organisasi = 3
            AND a.id_dewan = 3";
    return $this->db->query($sql);

  }
  

  
}