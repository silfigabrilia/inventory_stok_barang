<?php
defined('BASEPATH') or exit('No direct script access allowed');

// class dashboard extends CI_Controller
// function __construct(){
//     parent::__construct();
//     $this->login->auth();
// }

// //Load Halaman dashboard
// public function index() {
//     $this->load->view('user/index');
// }
class dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->login->auth();
    }
    //Load Halaman dashboard
    public function index() {
    $this->load->view('user/index');
}
}