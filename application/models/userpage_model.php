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

  
}