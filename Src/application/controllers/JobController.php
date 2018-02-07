<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('job_model');
    }

    public function browse_jobs() {
        
        $search_text = $this->input->get('search_text');
        $search_field = $this->input->get('search_field');
        
        $data['jobs'] = $this->job_model->get_all_jobs($search_text, $search_field);
        $data['job_categories'] = $this->job_model->get_all_jobs_group_by('JobCategoryName');
        $data['job_locations'] = $this->job_model->get_all_jobs_group_by('Location');
        $data['job_status'] = $this->job_model->get_all_jobs_group_by('JobStatus');
        $this->load->view('browse_jobs', $data);
    }

    public function post_job() {
        $data['job_categories'] = $this->job_model->get_all_job_categories();
        $this->load->view('post_job', $data);
    }

    public function save_job() {
        $data['Title'] = $this->input->post('job_title');
        $data['Location'] = $this->input->post('location');
        $data['Category'] = $this->input->post('category');
        $data['JobTags'] = $this->input->post('job_tags');
        //description
        $data['ApplicationUrlEmail'] = $this->input->post('application_email_url');
        $data['ClosingDate'] = $this->input->post('closing_date');
        $data['CompanyName'] = $this->input->post('company_name');
        $data['CompanyWebsite'] = $this->input->post('website');
        $data['Attachments'] = $this->input->post('job_attachments');
        $data['JobStatus'] = $this->input->post('job_status');

        $this->job_model->insert_job($data);
        $this->load->view('browse_jobs');
    }
    
    public function job_categories()
    {
        $this->load->view('job_categories');
    }
    
    public function save_job_categories()
    {
        $data['Description'] = $this->input->post('description');
        $data['JobCategoryName	'] = $this->input->post('name');
        $result = $this->job_model->insert_job_categories($data);
        $this->load->view('job_categories');
    }

}
