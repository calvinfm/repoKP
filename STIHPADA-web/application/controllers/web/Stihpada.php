<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stihpada extends CI_Controller {

	public function index()
	{
			$this->load->view('web/home');
	}

	//Tentang Kami
	public function tentang_sejarah()
	{
			$this->load->view('web/sejarah-stihpada');
	}

	public function tentang_visi_misi()
	{
			$this->load->view('web/visi-dan-misi');
	}

	public function tentang_tujuan_dan_saran()
	{
			$this->load->view('web/tujuan_dan_saran');
	}

	public function tentang_pimpinan_lembaga()
	{
			$this->load->view('web/pimpinan_lembaga');
	}

	public function tentang_akreditasi()
	{
			$this->load->view('web/akreditasi');
	}

	//Program Studi
	public function prodi_visi_misi_ilmu_hukum_s1()
	{
			$this->load->view('web/visi-misi-s1-ilmu-hukum');
	}

	public function prodi_visi_misi_ilmu_hukum_s2()
	{
			$this->load->view('web/visi-misi-s2-ilmu-hukum');
	}

	public function prodi_biaya_ilmu_hukum_s1()
	{
			$this->load->view('web/biaya-persyarat-prodi-s1-ilmu-hukum');
	}

	public function prodi_biaya_ilmu_hukum_s2()
	{
			$this->load->view('web/biaya-persyarat-prodi-s2-magister-hukum');
	}

	public function prodi_pendidikan_profesi_advokat()
	{
			$this->load->view('web/pendidikan-profesi-advokat');
	}

	//E-Journal
	public function e_journal()
	{
			$this->load->view('web/e-journal');
	}

	//Contact
	public function contact()
	{
			$this->load->view('web/contact');
	}
	




}
