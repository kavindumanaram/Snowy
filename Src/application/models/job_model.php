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

    public function get_all_keywords() {
        $query = $this->db->get('popular_keyword');
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
        $this->db->or_like(array('job.Title' => $search_text, 'job_categories.JobCategoryName' => $search_text, 'job.Discription' => $search_text, 'job.TimeStatus' => $search_text, 'job.JobTags' => $search_text));
        if ($location) {
            $this->db->where(array('job.Location' => $location));
        }

        if ($job_category) {
            $this->db->where(array('job_categories.JobCategoryName' => $job_category));
        }
        $this->db->order_by("JobId", "ASC");
        $query = $this->db->get();

        $has_updated = FALSE;
        $popular_keywords = $this->get_all_keywords();
        foreach ($popular_keywords as $keyword) {
            if ($keyword->Keyword == strtolower($search_text)) {
                $data['Count'] = $keyword->Count + 1;
                $condition = "Id = $keyword->Id";
                $this->db->where($condition);
                $this->db->update('popular_keyword', $data);
                $has_updated = TRUE;
                break;
            }
        }

        if(!$has_updated) {
                $data['Keyword'] = $search_text;
                $this->db->insert('popular_keyword', $data);
            }

        

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

    public function records_count($table, $group_by) {
        return $this->db->count_all($table);
    }

}
?>

