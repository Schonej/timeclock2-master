<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('clientId') != ""){
			redirect('clients');
	   }
	   else{
		$this->load->view('login');
	   }
	}

	public function verify()
	{
		$this->load->model('Signin_model');
		$check = $this->Signin_model->validate();
		if($check)
		{
			$this->session->set_userdata('clientId', $check->clientId);
			$this->session->set_userdata('firstName', $check->clientFirstname);
			$this->session->set_userdata('clientLevel', $check->clientLevel);
			redirect('clients');
		}
		else{
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
