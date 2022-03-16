<?php

class manageUsers_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getListUsers()
	{
		$sql = "SELECT Name, Username, Email, PhoneNumber, IsActive, CreateAt  
						FROM user
						WHERE IsAdmin = 0";
		return $this->db->query($sql)->result();
	}

	public function getUserDetail($username)
	{
		$sql = "SELECT * FROM user WHERE Username = '$username'";
		return $this->db->query($sql)->row();
	}

	function resetPassword($username, $hashpassword)
	{
		$sql = "UPDATE user SET Password = ? WHERE Username = '$username'";
		$process = $this->db->query($sql, $hashpassword);
		if($process){
				return TRUE;
		}else{
				return FALSE;
		}
	}

	function saveChange($data, $username)
	{		
		$sql = "UPDATE user SET IsActive = ? WHERE Username = '$username'";
		return $this->db->query($sql, $data);
	}
}