<?php

class auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database("snowydatabase");
    }

    public function register_user($data) {
        return $this->db->insert('user', $data);
    }

// Read data using username and password
    public function login($data) {

        $condition = "email =" . "'" . $data['username'] . "' AND " . "password =" . "'" . sha1($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

// Read data from database to show data in admin page
    public function read_user_information($username) {
        $condition = "email =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function get_users() {
        $this->db->select('*,user.Email as userEmail');
        $this->db->select('user.*,resume.*');
        $this->db->from('user');
        $this->db->join('resume', 'user.Email = resume.Email', 'left');
        $this->db->group_by('UserId');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_user($email) {

        $this->db->where('user.Email', $email);
        $this->db->delete('user');
        $this->db->where('resume.Email', $email);
        $this->db->delete('resume');
        return true;
    }

    public function record_count() {
        return $this->db->count_all("job");
    }

    public function job_count() {
        return $this->db->count_all("job");
    }

    public function user_count() {
        return $this->db->count_all("user");
    }

    public function resume_count() {
        return $this->db->count_all("resume");
    }

    public function get_job_categories($groupByParam, $randomEnabled) {
        $condition = "job.category = job_categories.JobCategoryId";
        $this->db->from('job,job_categories');
        $this->db->where($condition);
        if ($randomEnabled) {
            $this->db->order_by('rand()');
            $this->db->limit(3);
        }
        
        $this->db->group_by($groupByParam);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_job_categories_filter($jobCategoryid)
    {
        $condition = "job.category = $jobCategoryid";
        $this->db->select("Location,JobStatus");
        $this->db->from('job');
        $this->db->where($condition);
        $this->db->group_by("Location");
        $query = $this->db->get();
        return $query->result();
    }
    
        public function get_job_categories_latest_timestamp($jobCategoryid)
    {
        $condition = "job.category = $jobCategoryid";
        $this->db->select("Created");
        $this->db->from('job');
        $this->db->where($condition);
        $this->db->order_by("Created", "DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function popular_keywords() {
        $this->db->order_by("Count", "DESC");
        $this->db->limit(4);
        $query = $this->db->get("popular_keyword");
        return $query->result();
    }
    
    

}

?>