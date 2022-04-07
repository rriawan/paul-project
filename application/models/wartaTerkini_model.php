<?php

class wartaTerkini_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function listWartaTerkini()
  {
    $sql = "SELECT * FROM warta_terkini ORDER BY id DESC";
    return $this->db->query($sql)->result();
  }

  function detailWartaTerkini($id)
  {
    $sql = "SELECT * FROM warta_terkini where id = $id";
    return $this->db->query($sql)->row();
  }

  function insertWartaTerkini($data)
  {
    $sql = "INSERT INTO warta_terkini (PesanWartaTerkini, UpdateBy, UpdateDate)
            VALUES (?, ?, ?)";
    $exec = $this->db->query($sql, $data);
    if($exec){
      return TRUE;
    }else {
      return FALSE;
    }
  }
  function updateWartaTerkini($data, $id)
  {
    $sql = "UPDATE warta_terkini SET PesanWartaTerkini = ?, UpdateBy = ?, UpdateDate = ?
            WHERE id = $id";
    return $this->db->query($sql, $data);
  }
}