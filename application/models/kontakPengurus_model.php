<?php

class kontakPengurus_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getListPengurus()
	{
		$sql = "SELECT A.*, B.Email, B.PhoneNumber FROM kontak_pengurus A
						JOIN user B ON A.Username = B.Username
						WHERE B.IsAdmin = 1";
		return $this->db->query($sql)->result();
	}

	public function getListDataAdd()
	{
		$sql = "SELECT B.Name, B.Username, B.Email, B.PhoneNumber 
						FROM user B 
						WHERE B.IsAdmin = 0";
		return $this->db->query($sql)->result();
	}
	
	public function getDataUser($username)
	{
		$sql = "SELECT * FROM user WHERE Username = '$username'";
		return $this->db->query($sql)->row();
	}
	public function addNewPengurus($name, $username, $updateby)
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
		$dateNow = $dateNow->format('Y-m-d H:i:s');
		$sql = "INSERT INTO kontak_pengurus (Name, Username, UpdateBy, UpdateDate)
						VALUES ('$name', '$username', '$updateby', '$dateNow')";
		$execKontak =  $this->db->query($sql);
		if($execKontak){
			$sql2 = "UPDATE user SET IsAdmin = 1 WHERE Username = '$username'";
			$this->db->query($sql2);
		}		
	}

	public function deletePengurus($username)
	{
		$sql = "DELETE FROM kontak_pengurus WHERE Username = '$username'";
		$proses = $this->db->query($sql);

		if($proses){
			$sql2 = "UPDATE user SET IsAdmin = 0 WHERE Username = '$username'";
			$this->db->query($sql2);	
		}
	}
}