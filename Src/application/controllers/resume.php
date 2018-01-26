<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends CI_Controller {

		function __construct()
	{
	parent::__construct();
	#$this->load->helper('url');
	$this->load->model('ResumeModel');
	//$this->load->database();
	}

	public function index()
	{
		$this->load->view('add_resume');
	}

	public function add()
	{
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
		$data['skill'] = $this->input->post('skill');

		$result = $this->ResumeModel->insert_resume($data);
		redirect('Resume/index');
	}

	
}
