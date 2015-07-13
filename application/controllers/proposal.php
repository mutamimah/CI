<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proposal extends CI_Controller {
	public function index()
	{
	$this->load->view('header');
	$this->load->view('proposal');
	$this->load->view('footer');
	}
}
?>