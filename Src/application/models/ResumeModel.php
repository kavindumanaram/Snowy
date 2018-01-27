<?php
class ResumeModel extends CI_Model{

	function __construct()
	{
	parent::__construct();
	$this->load->database("snowydatabase");
	}

		public function insert_resume($data)
	{
		return $this->db->insert('resume', $data);
	}

	public function get_all_rresumes()
	{
		$query = $this->db->get('resume');
		return $query->result();
	}
}
?>