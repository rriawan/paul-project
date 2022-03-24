<?php

class pemasukan_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function listData()
  {
    $sql = "SELECT * FROM pemasukan";
    return $this->db->query($sql)->result();
  }

  function getLastSaldo()
  {
    $sql = "SELECT * FROM pemasukan ORDER BY id DESC LIMIT 1";
    return $this->db->query($sql)->row();
  }

  function getDataById($id)
  {
    $sql = "SELECT * FROM pemasukan WHERE id = $id";
    return $this->db->query($sql)->row();
  }

  function insertData($data)
  {
    $sql = "INSERT INTO pemasukan (Tanggal, pdf_doc, Uraian, Penerimaan, Pengeluaran, Saldo, UpdateBy, UpdateDate)
						VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
  }

  function updateData($id, $data)
  {
    $sql = "UPDATE pemasukan SET 
                      Tanggal = ?, 
                      pdf_doc = ?, 
                      Uraian = ?, 
                      Penerimaan = ?, 
                      Pengeluaran = ?,
                      Saldo = ?, 
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