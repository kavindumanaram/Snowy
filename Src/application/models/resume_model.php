<?php
class resume_model extends CI_Model{

	function __construct()
	{
	parent::__construct();
	$this->load->database("snowydatabase");
	}

		public function insert_resume($data)
	{
		$query = $this->db->insert('resume', $data);
                return $query->result();
	}

	public function get_all_rresumes()
	{
		$query = $this->db->get('resume');
		return $query->result();
	}
}
?>