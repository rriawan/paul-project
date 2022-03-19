<?php

class wartaTerkini_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function listWartaTerkini()
  {
    $sql = "SELECT * FROM warta_terkini";
    return $this->db->query($sql)->result();
  }

  function detailWartaTerkini($id)
  {
    $sql = "SELECT * FROM warta_terkini where id = $id";
    return $this->db->query($sql)->row();
  }

  function updateWartaTerkini($data, $id)
  {
    $sql = "UPDATE warta_terkini SET PesanWartaTerkini = ?, UpdateBy = ?, UpdateDate = ?
            WHERE id = $id";
    return $this->db->query($sql, $data);
  }
}