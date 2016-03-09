<?php

header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {


	function __construct() {
        parent::__construct();
        $this->load->model('usersmodel');
    }
	
    public function index() {
        $data['module'] = 'users';
        $data['view_file'] = "users_view";
        echo Modules::run('template/admin', $data);
    }

    public function get_userlist(){
    	echo $this->usersmodel->get_userList();
    }
}
