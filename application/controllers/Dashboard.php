<?php 
class Dashboard extends CI_CONTROLLER
{
    function __construct()
    {
        parent::__construct(); 
        if(!$this->session->userdata('clientId'))
            redirect('dashboard');
    }
    function index()
    {
        $this->load->model('dashboard_model'); 
        $this->db->order_by('clientFirstname', "asc");
        $data['newTimes'] = $this->dashboard_model->index(); 
        $this->load->view('dashboard', $data);
    }

    function clockins()
    {
        $this->load->model('employeeclockins_model'); 
        $data['clockins'] = $this->employeeclockins_model->getClockins();
        $this->load->view('clockins', $data);
    }

    function clockouts()
    {
        $this->load->model('employeeclockins_model'); 
        $data['clockouts'] = $this->employeeclockins_model->getClockouts();
        $this->load->view('clockouts', $data);
    }

    function allpunch()
    {
        $this->load->helper('form');
        $this->load->model('employeeclockins_model'); 
        $data['times'] = $this->employeeclockins_model->allpunches();
        $this->load->view('allpunches', $data);
    }

    function editclockins($id)
    {
        $this->load->model('employeeclockins_model');
        $data ['id'] = $this->employeeclockins_model->editclockins($id);
        $this->load->view('editclockins', $data);
    }

    function editclockouts($id)
    {
        $this->load->model('employeeclockins_model');
        $data ['id'] = $this->employeeclockins_model->editclockouts($id);
        $this->load->view('editclockouts', $data);
    }

    function updateclockintime($id)
    {
        $data = [
            'clockin' => $this->input->post('clockin')
        ];
        $this->load->model('employeeclockins_model');
        $this->load->helper('url');
        $this->employeeclockins_model->updateclockins($data, $id);

        $this->load->model('employeeclockins_model'); 
        $data['clockins'] = $this->employeeclockins_model->getClockins();
        $this->load->view('clockins', $data);
    }

    function updateclockouttime($id)
    {
        $data = [
            'clockout' => $this->input->post('clockout')
        ];
        $this->load->model('employeeclockins_model');
        $this->load->helper('url');
        $this->employeeclockins_model->updateclockins($data, $id);
        
        $this->load->model('employeeclockins_model'); 
        $data['clockouts'] = $this->employeeclockins_model->getClockouts();
        $this->load->view('clockouts', $data);
    }
}