<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layouts/footer');
    }

    public function datauser()
    {
        $data['data'] = $this->db->get('user')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data User';
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('user/datauser', $data);
        $this->load->view('layouts/footer');
    }
}
