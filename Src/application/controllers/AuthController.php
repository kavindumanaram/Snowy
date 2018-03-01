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
                if ($result != false) {
                    $session_data = array(
                        'email' => $result[0]->Email,
                        'userId' => $result[0]->UserId,
                        'user_level' => $result[0]->UserLevel,
                        'user_id' => $result[0]->UserId
                    );

                    $this->session->set_userdata('logged_in', $session_data);
                    redirect('AdminPanelController/index');
                    //$this->load->view('admin_panel');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login', $data);
            }
        }
    }

    public function Register() {
        $this->load->view('register');
    }

    public function RegisterUser() {
        $email = $data['Email'] = $this->input->post('email');
        $data['Password'] = sha1($this->input->post('password'));
        $data['UserLevel'] = $this->input->post('user_level');
        $result = $this->auth_model->register_user($data);
        //saving image
        if ($result) {
            $content = file_get_contents('https://ui-avatars.com/api/?name=' . $email . '&background=FF4F57&color=ffff&rounded=true&size=128');
            file_put_contents('./assets/uploads/profile_pic/' . $email . '.png', $content);
            redirect('AuthController/login');
        }
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
        $data['job_category_count'] = $this->auth_model->records_count("job_categories", "JobCategoryId");
        $data['job_count'] = $this->auth_model->records_count("job", "jobId");
        $data['user_count'] = $this->auth_model->records_count("user", "UserId");
        $data['resume_count'] = $this->auth_model->records_count("resume", "Id");
        $data['company_count'] = $result = $this->auth_model->records_count("job", "CompanyName");
        $data['job_categories'] = $this->auth_model->get_job_categories("JobCategoryId", TRUE);
        $data['job_category_list'] = $this->auth_model->get_job_categories("JobCategoryId", FALSE);
        $data['popular_keywords'] = $this->auth_model->popular_keywords();
        $data['latest_jobs'] = $this->auth_model->latest_jobs();
        $data['twitters'] = $this->auth_model->get_twitter();

        $job_category_locations = "";
        $job_category_job_status = "";

        foreach ($data['job_categories'] as $key => $value) {
            $category_id = $value->Category;
            $locations = $this->auth_model->get_job_categories_filter($category_id);

            foreach ($locations as $key1 => $value) {
                $job_category_locations .= $value->Location . " | ";
                $job_category_job_status .= $value->JobStatus . " | ";
            }

            $data['job_categories'][$key]->Location = rtrim($job_category_locations, " | ");
            $data['job_categories'][$key]->JobStatus = rtrim($job_category_job_status, " | ");
            $data['job_categories'][$key]->Created = $this->time_elapsed_string($this->auth_model->get_job_categories_latest_timestamp($category_id)[0]->Created);

            $job_category_locations = "";
            $job_category_job_status = "";
        }
        $this->load->view('index', $data);
    }

    public function user() {
        $data['records'] = $this->auth_model->get_users();
        $this->load->view('user', $data);
    }

    public function delete_user() {
        $email = $this->input->get('email');
        $this->auth_model->delete_user($email);
        redirect('authController/user');
    }

    public function process_twitter() {
        include_once(base_url() . 'assets/uploads/twitter_module/twitteroauth/twitteroauth.php');

        //delete twitter prfile pic content
        $file_path = './assets/uploads/twitter_module/img/';
        foreach (new DirectoryIterator($file_path) as $fileInfo) {
            if (!$fileInfo->isDot()) {
                unlink($fileInfo->getPathname());
            }
        }

        //delete twitter infor from db
        $this->auth_model->delete_twitter_info();

        $twitter_customer_key_array = $this->auth_model->get_specific_setting("Snow.Twitter.CustomerKey");
        $twitter_customer_secret_array = $this->auth_model->get_specific_setting("Snow.Twitter.CustomerSecret");
        $twitter_access_token_array = $this->auth_model->get_specific_setting("Snow.Twitter.AccessToken");
        $twitter_access_token_secret_array = $this->auth_model->get_specific_setting("Snow.Twitter.AccessTokenSecret");
        $twitter_search_tag_array = $this->auth_model->get_specific_setting("Snowy.Twitter.SearchText");
        $twitter_count = $this->auth_model->get_specific_setting("Snowy.Twitter.Count");

        $twitter_customer_key = $twitter_customer_key_array[0]->SettingValue;
        $twitter_customer_secret = $twitter_customer_secret_array[0]->SettingValue;
        $twitter_access_token = $twitter_access_token_array[0]->SettingValue;
        $twitter_access_token_secret = $twitter_access_token_secret_array[0]->SettingValue;
        $twitter_search_tag = $twitter_search_tag_array[0]->SettingValue;
        $params = array('tck' => $twitter_customer_key, 'tcs' => $twitter_customer_secret, 'act' => $twitter_access_token, 'tats' => $twitter_access_token_secret);
        $this->load->library('TwitterOAuth', $params);

        $connection = new TwitterOAuth($params);
        $tweets = $connection->get("search/tweets", array('q' => $twitter_search_tag . ' -RT', 'count' => $twitter_count[0]->SettingValue));

        if (isset($tweets->errors)) {
            echo 'Error :' . $tweets->errors[0]->code . ' - ' . $tweets->errors[0]->message;
        } else {
            foreach ($tweets->statuses as $key => $tweet) {
                $data['UserName'] = $tweet->user->name;
                $data['ScreenName'] = $tweet->user->screen_name;
                $data['Text'] = $tweet->text;
                $url = $tweet->user->profile_image_url;
                $validated_url = str_replace("_normal", '', $url);
                $file_name = $id = substr($validated_url, strrpos($validated_url, '/') + 1);
                $data['Image'] = $file_name;
                $result = $this->auth_model->save_tweets($data);
                
                //saving image
                if ($result) {
                    $content = file_get_contents($validated_url);
                    file_put_contents($file_path . $file_name, $content);
                }
            }
        }
        
        redirect('AdminPanelController/twitter_management');
    }

    private function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

}
