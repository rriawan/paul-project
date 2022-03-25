<?php

class profile_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function listData()
  {
    $sql = "SELECT * FROM profile_gereja";
    return $this->db->query($sql)->result();
  }

  function getDataById($id)
  {
    $sql = "SELECT * FROM profile_gereja WHERE id = $id";
    return $this->db->query($sql)->row();
  }

  function insertData($data)
  {
    $sql = "INSERT INTO profile_gereja (img_url, Judul, Rincian, UpdateBy, UpdateDate)
						VALUES (?, ?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else {
			return FALSE;
		}
  }

  function updateData($id, $data)
  {
    $sql = "UPDATE profile_gereja SET 
                      img_url = ?, 
                      Judul = ?, 
                      Rincian = ?,                       
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