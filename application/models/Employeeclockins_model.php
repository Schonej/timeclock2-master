<?php 
class Employeeclockins_model extends CI_MODEL
{
    function getAllForUser($userid = 0) 
    {
        if ($userid > 0){
            $this->db->where('clientId', $userid);
            return $this->db->get('punchcard')->result(); 
        }else 
        {
            return false;
        }
    }

    function getClockins() 
    {
        $this->db->select("clients.clientId, clients.clientFirstname, clients.clientLastname, punchcard.clientId, punchcard.clockin, punchcard.clockout, punchcard.id");
        $this->db->from('clients');
        $this->db->join('punchcard', 'clients.clientId = punchcard.clientId');
        $this->db->where('punchcard.clockin IS NOT NULL', null, false);
        $this->db->order_by('punchcard.clockin','ASC');
        $query = $this->db->get(); 
        return $query->result();
    }

    function getClockouts()
    {
        $this->db->select("clients.clientId, clients.clientFirstname, clients.clientLastname, punchcard.clientId, punchcard.clockin, punchcard.clockout, punchcard.id");
        $this->db->from('clients');
        $this->db->join('punchcard', 'clients.clientId = punchcard.clientId');
        $this->db->where('punchcard.clockout IS NOT NULL', null, false);
        $this->db->order_by('punchcard.clockout','ASC');
        $query = $this->db->get(); 
        return $query->result();
    }

    function allpunches()
    {
        $this->db->select("clients.clientId, clients.clientFirstname, clients.clientLastname, punchcard.clientId, punchcard.clockin, punchcard.clockout");
        $this->db->from('clients');
        $this->db->join('punchcard', 'clients.clientId = punchcard.clientId');
        $query = $this->db->get(); 
        return $query->result();
    }

    function editclockins($id)
    {
       $query = $this->db->get_where('punchcard', ['id' => $id]);
       return $query->row();
    }

    function editclockouts($id)
    {
       $query = $this->db->get_where('punchcard', ['id' => $id]);
       return $query->row();
    }
    
    function updateclockins($data, $id)
    {
        return $this->db->update('punchcard', $data, ['id' => $id]);
    }

}