<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyek extends CI_Controller {
	public function index()
	{
	$this->load->view('header');
	$this->load->view('proyek');
	$this->load->view('footer');
	}
}
?>