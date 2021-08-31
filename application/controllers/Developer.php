<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

	public function index(){
		$setting = array(
			'title' 		=> 'Developer',
			'navbar_title' 	=> 'Developer',
		);
		$this->layout('developer/developer', $setting);
	}

	private function layout($main_content, $setting=null, $data=null){
		$this->load->view("layout/header", $setting);
		$this->load->view($main_content,$data);
		$this->load->view("layout/footer");
	}
}
