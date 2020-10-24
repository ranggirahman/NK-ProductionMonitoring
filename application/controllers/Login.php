<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$setting = array(
			'title' 		=> 'Login',
		);
		$this->load->view('login/login', $setting);
	}
}
