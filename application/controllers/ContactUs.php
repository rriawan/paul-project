<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

  public function __construct() {        
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('contactus_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Hubungi Kami',
			'content' => 'user_kontak-us',	
      'active_uri' => 'kontakkami',
      'active_sub' => '',
      'userinfo' => $this->userInfo()
		);
		$this->load->view('user-layout/wrappers.php', $data, FALSE);
	}

  public function userInfo()
  {
    $username = $this->session->userdata('Username');
    return $this->auth_model->userInfo($username)->row();
  }

  public function CreateMessage()
  {
    $date = new DateTime("now", new DateTimeZone('Asia/Bangkok'));

    $data = array(
      'Username' => $this->session->userdata('Username'),
      'Subject' => $this->input->post('subject'),
      'Message' => $this->input->post('message'),
      'IsRead' => 0,
      'ReadBy' => "",
      'CreateDate' => $date->format('Y-m-d H:i:s')
    );
    $this->contactus_model->insertMessage($data);
  }
}