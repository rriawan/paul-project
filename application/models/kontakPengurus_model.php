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
						FROM user B";
		return $this->db->query($sql)->result();
	}
	
	public function getDataUser($username)
	{
		$sql = "SELECT * FROM user WHERE Username = '$username'";
		return $this->db->query($sql)->row();
	}
	public function addNewPengurus($name, $username, $isadmin)
	{
		$sql = "INSERT INTO kontak_pengurus (Name, Username)
						VALUES ('$name', '$username')";
		$execKontak =  $this->db->query($sql);
		if($execKontak){
			$sql2 = "UPDATE user SET IsAdmin = 1 WHERE Username = '$username'";
			$this->db->query($sql2);
		}		
	}
}