<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
	$this->load->view('header');
	$this->load->view('kontak');
	$this->load->view('footer');
	}
}
?>