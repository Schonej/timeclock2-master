<?php 
class Dashboard_model extends CI_MODEL
{
    function index()
    {
        return $this->db->get('clients')->result(); 
    }
}