<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library(['form_validation']);
		$this->load->model('Clockin_model');
		$this->load->model('Clockout_model');
		$this->load->model('Timetab_model');
		$this->load->database();
	}

	public function index()
	{
		if($this->session->userdata('clientId') != ""){
			$this->load->view('clienthome');
		}
		else{
			redirect('login');
		}
	}

	public function clockin()
	{
		$this->load->library('session');
		$clientId = $this->session->userdata('clientId');
		$this->session->set_flashdata('msg', 'Thanks for clocking in');
		$this->Clockin_model->insert_data($clientId);
	}

	public function clockout()
	{
		$this->load->library('session');
		$clientId = $this->session->userdata('clientId');
		$this->session->set_flashdata('msg', 'Thanks for clocking out');
		$this->Clockout_model->insert_data($clientId);
	}

	public function timetab()
	{
		$this->load->model('timetab');
        $data['times'] = $this->timetab_model->getAll();
        $this->load->view('clienthome', $data);
	}
}
