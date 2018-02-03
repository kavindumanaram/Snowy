<?php

class auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database("snowydatabase");
    }

    public function register_user($data) {
        return $this->db->insert('user', $data);
    }

// Read data using username and password
    public function login($data) {

        $condition = "email =" . "'" . $data['username'] . "' AND " . "password =" . "'" . sha1($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

// Read data from database to show data in admin page
    public function read_user_information($username) {

        $condition = "email =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

?>