<?php 
class Timetabs extends CI_CONTROLLER
{
    function __construct()
    {
        parent::__construct(); 
        if(!$this->session->userdata('clientId'))
            redirect('clienthome');
    }
    function index()
    {
        $this->load->model('timetab_model'); 
        $data['times'] = $this->timetab_model->getAllForUser($this->session->userdata('clientId')); 
        $this->load->view('clienthome2', $data);
    }
}