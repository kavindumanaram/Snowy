<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resume extends CI_Controller {

		function __construct()
	{
	parent::__construct();
	#$this->load->helper('url');
	 parent::__construct();
        $this->load->library('form_validation');
	$this->load->model('ResumeModel');
	//$this->load->database();
	}

	public function index()
	{
		$this->load->view('add_resume');
	}

	public function add()
	{

		 $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');

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

		//$result = $this->ResumeModel->insert_resume($data);

		  if (isset($data['Email'])) {
        $data['email'] = $data['Email'];
    } else {
        $data['email'] = "";
}

        $data['message'] = "";

    //    echo $data['email'];

        if (($this->form_validation->run() == FALSE) ) {
        	$this->load->view('add_resume', $data);
        }
        else
        {
        	//echo "true";
        	$this->load->view('add_resume', $data);

        
    }
//echo ($this->form_validation->run() == true);
		//redirect('Resume/index');
   // echo  ($this->form_validation->run() == false)."sss";
	}


	public function browse()
	{		
		$data['records'] = $this->ResumeModel->get_all_rresumes();
		$this->load->view('browse-resumes', $data);					
	}	
}
