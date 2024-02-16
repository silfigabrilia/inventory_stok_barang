<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Barang';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('peminjaman/request');
        $this->load->view('templates/auth_footer');
    }
}