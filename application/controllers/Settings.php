<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index(){
		$setting = array(
			'title' 		=> 'Settings',
			'navbar_title' 	=> 'Settings',
		);
		$this->layout('settings/settings', $setting);
	}

	private function layout($main_content, $setting=null, $data=null){
		$this->load->view("layout/header", $setting);
		$this->load->view($main_content,$data);
		$this->load->view("layout/footer");
	}
}
