<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepoAdmin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/dashboard');
		    } else {
			redirect('admin/login');
		    }
	}

	public function register()
	{
			$this->load->view('admin/register');
		
	}

	public function dashboard()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/dashboard');
		    } else {
			redirect('admin/login');
		    }
	}

	public function journal()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/journal');
		    } else {
			redirect('admin/login');
		    }
	}


	public function members()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/members');
		    } else {
			redirect('admin/login');
		    }
	}
	
	public function profile()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/profile');
		    } else {
			redirect('admin/login');
		    }
	}
	
	public function upload_journal()
	{
		if($this->session->userdata('username') && $this->session->userdata('id')) {
			$this->load->view('admin/upload_journal');
		    } else {
			redirect('admin/login');
		    }
	}
}
