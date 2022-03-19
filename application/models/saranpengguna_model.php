<?php

class saranpengguna_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

  function getListSaran()
  {
    $sql = "SELECT A.*, B.Name FROM saran_komentar A
            JOIN user B ON A.Username = B.Username";
    return $this->db->query($sql)->result();
  }

  function getMessageDetail($idMessage)
  {
    $sql = "SELECT A.*, B.Name FROM saran_komentar A
            JOIN user B on A.Username = B.Username
            WHERE A.id = $idMessage";
    return $this->db->query($sql)->row();
    
  }

  function updateReadBy($useradmin, $idMessage)
  {
    $sql = "UPDATE saran_komentar SET ReadBy = '$useradmin', IsRead = 1
            WHERE id = $idMessage";
    return $this->db->query($sql);

  }

}