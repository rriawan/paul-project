<?php

class contactus_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function insertMessage($data){
    $sql = "INSERT INTO saran_komentar (Username, Subject, Message, IsRead, ReadBy, CreateDate)
						VALUES (?, ?, ?, ?, ?, ?)";
		if($this->db->query($sql, $data)){
			return TRUE;
		}else{
			return FALSE;
		}
  }

}