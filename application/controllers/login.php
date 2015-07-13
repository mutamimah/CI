<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
	function __contruct {
		parent::__contruct();
	}
	function index()
	{
	if($this->session->userdata('user')) {
		redirect('beranda','refresh');
	}
	else {
		$this->load->helper(array('form'));
		$this->load->view('login');
		}
	}
}
?> 