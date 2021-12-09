<?php 
class Timetab_model extends CI_MODEL
{
    function getAllForUser($userid = 0) 
    {
        if ($userid > 0){
            $this->db->select("clients.clientId, clients.clientFirstname, clients.clientLastname, punchcard.clientId, punchcard.clockin, punchcard.clockout");
            $this->db->where('clients.clientId', $userid);
            $this->db->from('clients');
            $this->db->join('punchcard', 'clients.clientId = punchcard.clientId');
            $query = $this->db->get(); 
            return $query->result();
        }else 
        {
            return false;
        }
    }

    function getAll() 
    {
       return $this->db->get('punchcard')->result(); 
    }
}