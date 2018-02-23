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

    public function insert_job_categories($data) {
        $query = $this->db->insert('job_categories', $data);
        return $query->result();
    }

    public function get_all_job_categories() {
        $query = $this->db->get('job_categories');
        return $query->result();
    }

    public function get_all_jobs($limit, $start, $search_text, $search_field) {
        $this->db->select('job.*,job_categories.*');
        $this->db->from('job');
        $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner');
        $this->db->limit($limit, $start);
        if ($search_text != '' && $search_field == '') {
            $this->db->or_like(array('job.Title' => $search_text, 'job.Location' => $search_text, 'job_categories.JobCategoryName' => $search_text, 'job.Discription' => $search_text, 'job.TimeStatus' => $search_text, 'job.JobTags' => $search_text));
        } else if ($search_text != '' && $search_field != '') {
            $this->db->or_like(array($search_field => $search_text));
        }
        $this->db->order_by("JobId", "ASC");
        $query = $this->db->get();
        return $query->result();
    }
    
        public function get_all_jobs_with_filters($limit, $start, $search_text, $location, $job_category) {
        $this->db->select('job.*,job_categories.*');
        $this->db->from('job');
        $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner');
        $this->db->limit($limit, $start);
       // if ($search_text != '' && $search_field == '') {
            $this->db->or_like(array('job.Title' => $search_text, 'job_categories.JobCategoryName' => $search_text, 'job.Discription' => $search_text, 'job.TimeStatus' => $search_text, 'job.JobTags' => $search_text));
       // } else 
       if ($location) {
            $this->db->where(array('job.Location' => $location));
        }
        
        if($job_category){
            $this->db->where(array('job_categories.JobCategoryName' => $job_category));
        }
        $this->db->order_by("JobId", "ASC");
        $query = $this->db->get();
        return $query->result();
    }
    

    public function get_all_jobs_group_by($group_by_paramerter) {
        $this->db->select('job.*,job_categories.*, count(JobId) as jobCount');
        $this->db->from('job');
        $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner');
        $this->db->group_by($group_by_paramerter);
        $query = $this->db->get();
        return $query->result();
    }

    public function record_count() {
        return $this->db->count_all("job");
    }

}
?>

