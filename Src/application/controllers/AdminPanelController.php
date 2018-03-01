<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminPanelController extends CI_Controller {

        function __construct() {
        parent::__construct();
        $this->load->model('job_model');
        $this->load->library('session');
    }
    
    public function index() {
        redirect('resumeController/view_resume');
    }
    
    public function twitter_management() {
       // $data['records'] = $this->resume_model->get_user_resume($user_id);
        $this->load->model('auth_model');
        $data['twitter_count'] = $this->auth_model->get_specific_setting("Snowy.Twitter.Count")[0]->SettingValue;
        $data['twitter_search_tag'] = $this->auth_model->get_specific_setting("Snowy.Twitter.SearchText")[0]->SettingValue;
     //   print_r($twitter_count[0]->SettingValue); 
        $this->load->view('twitter', $data);
    }

}

?>