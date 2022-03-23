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