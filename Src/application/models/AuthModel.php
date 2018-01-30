<?php
class AuthModel extends CI_Model{

	function __construct()
	{
	parent::__construct();
	$this->load->database("snowydatabase");
	}

public function register_user($data)
	{
		return $this->db->insert('resume', $data);
	}

}
?>