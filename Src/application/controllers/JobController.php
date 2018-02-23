<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JobController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('job_model');
        $this->load->library('pagination');
    }

    public function browse_jobs() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/JobController/browse_jobs";
        $total_row = $this->job_model->records_count("job", "JobId");
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '&nbsp;<a class="btn btn-common">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);

        if ($this->uri->segment(3)) {
            $page = max(0, ( $this->uri->segment(3) - 1 ) * $config["per_page"]);
        } else {
            $page = 0;
        }

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

        $search_text = strtolower($this->input->get('search_text'));
        $search_field = $this->input->get('search_field');
        $search_from = $this->input->get('page');
        $search_location = $this->input->get('location');
        $search_job_category = $this->input->get('job_category');
       // $location = $this->input->get('location');

        if($search_from){
            $data['jobs'] = $this->job_model->get_all_jobs_with_filters($config["per_page"], $page, $search_text, $search_location, $search_job_category);
        }
        else{
            $data['jobs'] = $this->job_model->get_all_jobs($config["per_page"], $page, $search_text, $search_field);
        }
        
        // $data["results"] = $this->job_model->get_all_jobs();

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

    public function job_categories() {
        $this->load->view('job_categories');
    }

    public function save_job_categories() {
        $data['Description'] = $this->input->post('description');
        $data['JobCategoryName	'] = $this->input->post('name');
        $result = $this->job_model->insert_job_categories($data);
        $this->load->view('job_categories');
    }

}
