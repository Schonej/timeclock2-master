<?php
class Clockin_model extends CI_Model
{
	function insert_data($clientId)
	{
        $this->load->helper('date');
        date_default_timezone_set("America/Boise");
        $now = date('Y-m-d H:i');

        $values_array = array(
            'clockin' => $now,
            'clientId' => $clientId,
        );
        $this->db->insert('punchcard', $values_array);
        redirect('clients');
    }
        
}