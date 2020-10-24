<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index(){
		$setting = array(
			'title' 		=> 'Report',
			'navbar_title' 	=> 'Report',
		);
		$this->layout('report/report', $setting);
	}

	private function layout($main_content, $setting=null, $data=null){
		$this->load->view("layout/header", $setting);
		$this->load->view($main_content,$data);
		$this->load->view("layout/footer");
	}
}
