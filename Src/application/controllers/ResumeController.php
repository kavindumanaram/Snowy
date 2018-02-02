<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ResumeController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ResumeModel');
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
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = 10000;
            $config['file_name'] =  $this->input->post('nic');
           // $config['max_width'] = 1024;
           // $config['max_height'] = 768;

            $this->load->library('upload', $config);
            $this->lets_upload('cvImage');
            $this->lets_upload('cv');

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

            $result = $this->ResumeModel->insert_resume($data);
        }

        $this->load->view('add_resume', $this->data);
    }

    public function browse() {
        $data['records'] = $this->ResumeModel->get_all_rresumes();
        $this->load->view('browse_resumes', $data);
    }

    public function lets_upload($field_name) {
        if (!$this->upload->do_upload($field_name)) {
            $this->data['notification'] .= $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();

        //    $this->data['notification'] .= $upload_data['file_name'] . " is successfully uploaded.<br>";
        }
    }

}
