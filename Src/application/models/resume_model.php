<?php
class resume_model extends CI_Model{

	function __construct()
	{
	parent::__construct();
	$this->load->database("snowydatabase");
	}

		public function insert_resume($data)
	{
            return $this->db->insert('resume', $data);
//if ($query->num_rows() == 1) {
//            return true;
//        } else {
//            return false;
//        }
	}
        
        	public function update_resume($data)
	{
                    $condition = "Email = 'kavinduxyz@gmail.com'";
                $this->db->where($condition);
            return $this->db->update('resume', $data);
            
	}

	public function get_all_rresumes()
	{
		$query = $this->db->get('resume');
		return $query->result();
	}
        
        public function get_user_resume()
	{
            $condition = "Email = 'kavinduxyz@gmail.com'";
                $this->db->where($condition);
                $query = $this->db->get('resume');
		return $query->result();
	}
}
?>