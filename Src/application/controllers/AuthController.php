<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AuthController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function Login() {
        $this->load->view('login');
    }

    public function userLoginProcess() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if (isset($this->session->userdata['logged_in'])) {
                $this->load->view('admin_page');
            } else {
                $this->load->view('login');
            }
        } else {
            $data = array(
                'username' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $result = $this->auth_model->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('email');
                $result = $this->auth_model->read_user_information($username);
                // print_r($result);
                if ($result != false) {
                    $session_data = array(
                        'email' => $result[0]->Email,
                        'userId' => $result[0]->UserId,
                    );

                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin_panel');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login', $data);
                //print_r($data);
            }
        }
    }

    public function Register() {
        $this->load->view('register');
    }

    public function RegisterUser() {
        echo $data['Email'] = $this->input->post('email');
        echo $data['Password'] = sha1($this->input->post('password'));
        $result = $this->auth_model->register_user($data);
        redirect('AuthController/login');
    }

    public function Logout() {

        $sess_array = array(
            'username' => ''
        );

        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('login', $data);
    }

    public function change_password() {
        $this->load->view('change_password');
    }

    public function index() {
        $this->load->view('index');
    }

    public function user() {
        $data['records'] = $this->auth_model->get_users();
        $this->load->view('user', $data);
    }
    
    public function delete_user()
    {
        $email = $this->input->get('email');
        $this->auth_model->delete_user($email);
        redirect('authController/user');
    }

}
