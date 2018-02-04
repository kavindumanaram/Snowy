<?php

class job_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database("snowydatabase");
    }

    public function insert_job($data) {
        $query = $this->db->insert('job', $data);
        return $query->result();
    }
    
    public function insert_job_categories($data)
    {
        $query = $this->db->insert('job_categories', $data);
        return $query->result();
    }
    
    public function get_all_job_categories()
    {
        $query = $this->db->get('job_categories');
        return $query->result();
    }
    
    public function get_all_jobs()
    {
    $this->db->select('job.*,job_categories.*');
    $this->db->from('job');
    $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner'); 
    $query = $this->db->get();
    return $query->result();  
    }
    
    public function get_all_jobs_group_by($group_by_paramerter)
    {
    $this->db->select('job.*,job_categories.*, count(JobId) as jobCount');
    $this->db->from('job');
    $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner'); 
    $this->db->group_by($group_by_paramerter);
    $query = $this->db->get();
    return $query->result();  
    }

}
?>

