<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminPanelController extends CI_Controller {
    public function index()
            {
        redirect('resumeController/view_resume');
            }
}
?>