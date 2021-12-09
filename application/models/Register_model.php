<?php
class Register_model extends CI_Model
{
	function insert_data($firstName, $lastName, $email, $pwd)
	{
		$this->db->where('clientEmail', $email);
		$chk_email_qry = $this->db->get('clients');
		if($chk_email_qry->num_rows() > 0){			
			return 1;
		}
		else
		{
			$values_array = array(
				'clientFirstname' => $firstName,
				'clientLastname' => $lastName,
				'clientEmail' => $email,
				'clientPassword' => md5($pwd)
			);
			$this->db->insert('clients', $values_array);
			return 0;
		}

	}
}