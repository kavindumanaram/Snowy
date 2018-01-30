<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JobController extends CI_Controller {

		function __construct()
	{
	parent::__construct();
	//$this->load->model('ResumeModel');
	}

	public function browse_jobs()
	{
		$this->load->view('browse_jobs');
	}


	

}