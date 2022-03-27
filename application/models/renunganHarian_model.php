<?php

class renunganHarian_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function getRenunganHarian()
  {
    $sql = "SELECT * FROM renungan_harian";
    return $this->db->query($sql)->result();
  }

  function getRenunganUser()
  {
    $sql = "SELECT A.*, B.Name FROM renungan_harian A JOIN user B ON A.UpdateBy = B.Username LIMIT 1";
    return $this->db->query($sql)->row();
  }

  function detailRenunganHarian($id)
  {
    $sql = "SELECT * FROM renungan_harian where id = $id";
    return $this->db->query($sql)->row();
  }

  function updateRenunganHarian($data, $id)
  {
    $sql = "UPDATE renungan_harian SET Renungan = ?, UpdateBy = ?, UpdateDate = ?
            WHERE id = $id";
    return $this->db->query($sql, $data);
  }
}