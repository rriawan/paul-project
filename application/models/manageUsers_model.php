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
}