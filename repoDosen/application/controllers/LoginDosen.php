<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LoginDosen extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata('username')) {
            redirect('dosen/journal');
        } else {
            $this->load->view('dosen/login');
        }
    }

    public function login() {
        $email = $this->input->post('username');
        $password = $this->input->post('password');
        
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => API_URL . "/dosen/login",
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'username' => $email,
                'password' => $password,
            ],
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $res = json_decode(curl_exec($ch) , true);

        if ($res['status'] == 'Success') {
            $this->session->set_userdata([
                'username' => $res['username'],
                'id_dosen' => $res['id_dosen'],
                'path_image' => $res['path_image']
            ]);
            redirect('dosen/journal');
        } else {
            $this->session->set_flashdata('message', 'Sorry your email or password wrong!.');
            redirect('dosen/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata(['username']);
        $this->session->sess_destroy();

        redirect('dosen/login');
    }
}
