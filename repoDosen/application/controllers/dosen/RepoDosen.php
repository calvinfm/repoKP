<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepoDosen extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')) {
			$this->load->view('dosen/journal');
		    } else {
			redirect('dosen/login');
		    }
	}

	public function register()
	{
			$this->load->view('dosen/register');
		
	}


	public function journal()
	{
		if($this->session->userdata('username')) {
			$this->load->view('dosen/journal');
		    } else {
			redirect('dosen/login');
		    }
	}
	
	public function profile()
	{
		if($this->session->userdata('username')) {
			$this->load->view('dosen/profile');
		    } else {
			redirect('dosen/login');
		    }
	}
	
	public function upload_journal()
	{
		if($this->session->userdata('username')) {
			$this->load->view('dosen/upload_journal');
		    } else {
			redirect('dosen/login');
		    }
	}
}
