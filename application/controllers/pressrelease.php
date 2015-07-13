<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pressrelease extends CI_Controller {
	public function index()
	{
	$this->load->view('header');
	$this->load->view('pressrelease');
	$this->load->view('footer');
	}
}
?>