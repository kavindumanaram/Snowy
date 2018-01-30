<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthController extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('AuthModel');
	}

	public function Login()
	{
		$this->load->view('login');
	}

	public function Register()
	{
		$this->load->view('register');
	}

	public function RegisterUser()
	{
		echo $data['Email'] = $this->input->post('email');
		echo $data['Password'] = sha1($this->input->post('password'));
		$result = $this->AuthModel->register_user($data);
		redirect('AuthModel/login');
	}
}
