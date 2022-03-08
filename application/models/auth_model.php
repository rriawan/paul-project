<?php

class auth_model extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($name, $username, $email, $phonenumber, $hashpassword)
	{
		$dateNow = new DateTime("now", new DateTimeZone('Asia/Bangkok'));
        $dateNow = $dateNow->format('Y-m-d H:i:s');
        $sql = "INSERT INTO user (Name, Username, Email, PhoneNumber, Password, IsAdmin, IsActive, CreateAt)
                VALUES ('$name', '$username', '$email', '$phonenumber', '$hashpassword', 0, 1, '$dateNow')";
        $query = $this->db->query($sql);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
	}
    function checkOldPassword($username, $oldpassword){
        $sql = "SELECT * FROM UserAccount WHERE Username ='$username'";
        $data_user = $this->db->query($sql)->row();
        if(password_verify($oldpassword, $data_user->Password)){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    function changePassword($username, $hashpassword){
        $sql = "UPDATE UserAccount SET Password = ? WHERE Username = '$username'";
        $process = $this->db->query($sql, $hashpassword);
        if($process){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function checknik($nik)
    {
        $sql = "SELECT * FROM User WHERE NIK = '$nik'";        
        return $this->db->query($sql)->result_array();
    }
    // function checkPassword($username, $oldpassword){
    //     $
    // }

    // LOGIN //
    function loginProses($username, $password){
        $sql = "SELECT * FROM user WHERE Username ='$username'";
        $data_user = $this->db->query($sql)->row();
        // if($data_user->num_rows() > 0){
            // $result = $data_user->row();
            if(password_verify($password, $data_user->Password)){
                $this->session->set_userdata('Username', $data_user->Username);
                $this->session->set_userdata('Name', $data_user->Name);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            }else {
                return FALSE;
            }
        // }
        
    }

    function isLogin(){
        if(empty($this->session->userdata('is_login'))){
            redirect('Login');
        }
    }

    function isAccessible($BagianID){
        if($BagianID == $this->session->userdata('BagianID')){
            return TRUE;            
        }else {
            return FALSE;
        }
    }
    function isAdmin($admin){
        if($admin == $this->session->userdata('Username')){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    //END LOGIN //
    function checknikuser($username){
        $sql = "SELECT NIK FROM UserAccount WHERE Username = '$username'";
        return $this->db->query($sql);
    }

    function checkusername($username)
    {
        $sql = "SELECT * FROM user WHERE Username = '$username'";
        return $this->db->query($sql);
    }
}
?>