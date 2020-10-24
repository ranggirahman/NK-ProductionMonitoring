<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$setting = array(
			'title' 		=> 'Dashboard',
			'navbar_title' 	=> 'Dashboard',
		);
		$this->layout('dashboard/dashboard', $setting);
	}

	private function layout($main_content, $setting=null, $data=null){
		$this->load->view("layout/header", $setting);
		$this->load->view($main_content,$data);
		$this->load->view("layout/footer");
	}
}
