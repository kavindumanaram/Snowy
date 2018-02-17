<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ResumeController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('resume_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        //$this->load->view('add_resume');
        $this->load->view('add_resume', array('error' => ' '));
    }

    public function add() {

        $this->data['notification'] = '';

        if ($this->input->post('upload'))
            {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = 10000;
            $config['file_name'] =  $this->input->post('nic');
            
            $job_folder_path = "./assets/uploads/cv/".$this->input->post('apply_position');
            
            if (!file_exists($job_folder_path)) {
                mkdir($job_folder_path, 0777, true);
            }
            
            $this->lets_upload('cvImage', $config, './assets/uploads/cv_image/');
            $this->lets_upload('cv', $config, $job_folder_path);

            $data['Title'] = $this->input->post('title');
            $data['Name'] = $this->input->post('name');
            $data['Nic'] = $this->input->post('nic');
            $data['Gender'] = $this->input->post('gender');
            $data['Email'] = $this->input->post('email');
            $data['Mobile'] = $this->input->post('mobile');
            $data['HomePhone'] = $this->input->post('home_phone');
            $data['MaritalStatus'] = $this->input->post('marital_status');
            $data['CurrentResidence'] = $this->input->post('current_residence');
            $data['ApplyPosition'] = $this->input->post('apply_position');
            $data['CurrentDesignation'] = $this->input->post('current_designation');
            $data['SalaryExpec'] = $this->input->post('salary_expectation');
            $data['ExperienceYears'] = $this->input->post('total_experiance');
            $data['HighestQualificationTitle'] = $this->input->post('qualification');
            //	$data['HighestQualificationId'] = $this->input->post('qualification_name');
            $data['Description'] = $this->input->post('description');
            $data['Skills'] = $this->input->post('skill');

            $result = $this->resume_model->insert_resume($data);
        }

        $this->load->view('add_resume', $this->data);
    }

    public function browse() {
        $data['records'] = $this->resume_model->get_all_rresumes();
        $this->load->view('browse_resumes', $data);
    }

    public function lets_upload($field_name, $config, $upload_path) {
        
        $config['upload_path'] = $upload_path;
        $this->load->library('upload', $config, $field_name);
        $this->$field_name->initialize($config);
        
        if (!$this->$field_name->do_upload($field_name)) {
            $this->data['notification'] .= $this->$field_name->display_errors();
        } else {
          //  $upload_data = $this->upload->data();

        //    $this->data['notification'] .= $upload_data['file_name'] . " is successfully uploaded.<br>";
        }
    }
    
    public function view_resume()
    {
        $data['records'] = $this->resume_model->get_user_resume();
       $this->load->view('admin_panel', $data);
    }
    
    public function edit()
    {
        $data['records'] = $this->resume_model->get_user_resume();
        $this->load->view('edit_resume', $data);
    }
    
    public function edit_resume_prosess()
    {
        $this->data['notification'] = '';

        if ($this->input->post('upload'))
            {
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = 10000;
            $config['file_name'] =  $this->input->post('nic');
            
            $job_folder_path = "./assets/uploads/cv/".$this->input->post('apply_position');
            
            if (!file_exists($job_folder_path)) {
                mkdir($job_folder_path, 0777, true);
            }
            
            $this->lets_upload('cvImage', $config, './assets/uploads/cv_image/');
            $this->lets_upload('cv', $config, $job_folder_path);

            $data['Title'] = $this->input->post('title');
            $data['Name'] = $this->input->post('name');
            $data['Nic'] = $this->input->post('nic');
            $data['Gender'] = $this->input->post('gender');
            $data['Email'] = $this->input->post('email');
            $data['Mobile'] = $this->input->post('mobile');
            $data['HomePhone'] = $this->input->post('home_phone');
            $data['MaritalStatus'] = $this->input->post('marital_status');
            $data['CurrentResidence'] = $this->input->post('current_residence');
            $data['ApplyPosition'] = $this->input->post('apply_position');
            $data['CurrentDesignation'] = $this->input->post('current_designation');
            $data['SalaryExpec'] = $this->input->post('salary_expectation');
            $data['ExperienceYears'] = $this->input->post('total_experiance');
            $data['HighestQualificationTitle'] = $this->input->post('qualification');
            //	$data['HighestQualificationId'] = $this->input->post('qualification_name');
            $data['Description'] = $this->input->post('description');
            $data['Skills'] = $this->input->post('skill');

            $result = $this->resume_model->update_resume($data);
        }
        
        redirect('ResumeController/edit');
    }

}
