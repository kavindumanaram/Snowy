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

    public function records_count($table, $group_by) {
      
      //  $this->db->group_by($group_by);
        return  $this->db->count_all($table);
        //return $query;
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
    
        public function latest_jobs(){
     $this->db->select('job.*,job_categories.*');
        $this->db->from('job');
        $this->db->join('job_categories', 'job.Category = job_categories.JobCategoryId', 'inner');
        $this->db->limit(4);
        $this->db->order_by("JobId", "ASC");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_twitter(){
     $query = $this->db->get('twitter');
        return $query->result();
    }
    
    public function get_specific_setting($setting_name){
        $condition = "SettingName = '$setting_name'";
    $this->db->where($condition);
     $query = $this->db->get('setting');
        return $query->result();
    }
    
        public function save_tweets($data) {
        return $this->db->insert('twitter', $data);
    }
    
    public function delete_twitter_info()
    {
        $this->db->empty_table("twitter");
    }

}

?>