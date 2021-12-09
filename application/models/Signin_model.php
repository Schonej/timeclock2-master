<?php
class Signin_model extends CI_Model
{
    function validate()
    {
        $arr['clientEmail'] = $this->input->post('clientEmail');
		$arr['clientPassword'] = md5($this->input->post('clientPassword'));

        return $this->db->get_where('clients', $arr)->row();
    }
}