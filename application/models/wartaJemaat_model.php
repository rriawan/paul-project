<?php

class wartaJemaat_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function insertWarta($data)
  {
    $sql = "INSERT INTO warta_jemaat (Judul, pdf_doc, UpdateBy, UpdateDate)
						VALUES (?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
  }
  function listWartaJemaat()
  {
    $sql = "SELECT * FROM warta_jemaat";
    return $this->db->query($sql)->result();
  }

  function getWartaById($id)
  {
    $sql = "SELECT * FROM warta_jemaat where id = $id";
    return $this->db->query($sql)->row();
  }

  function updateWartaJemaat($id, $data)
  {
    $sql = "UPDATE warta_jemaat SET Judul = ?, pdf_doc = ?, UpdateBy = ?, UpdateDate = ?
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