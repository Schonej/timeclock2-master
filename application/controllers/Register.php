<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library(['form_validation']);
		$this->load->model('Register_model');
		$this->load->database();
	}


	 public function index()
	{
		$this->form_validation->set_rules('clientFirstname', 'swag', 'required' );
		$this->form_validation->set_rules('clientLastname', 'swag', 'required' );
		$this->form_validation->set_rules('clientEmail', 'swag', 'required' );
		$this->form_validation->set_rules('clientPassword', 'swag', 'required' );

		if($this->form_validation->run() == false){
			$this->load->view('register');
		}
		else{
			$firstName=$this->input->post('clientFirstname');
			$lastName=$this->input->post('clientLastname');
			$email=$this->input->post('clientEmail');
			$pwd=$this->input->post('clientPassword');

			$status = $this->Register_model->insert_data($firstName, $lastName, $email, $pwd);
			if($status == 0){
				redirect('login');
			}
			if($status == 1){
				echo "error";
			}
		}
	}

	public function index2()
	{

		if($this->input->post('register'))
		{
		$firstName=$this->input->post('clientFirstname');
		$lastName=$this->input->post('clientLastname');
		$email=$this->input->post('clientEmail');
		$pwd=$this->input->post('clientPassword');

		$this->Register_model->insert_data($name,$email,$phone,$password);

	}else{
	$this->load->view('register.php');
	}
	}


}
