<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Home - Bluewave";
        $data['favicon'] =  base_url() . "assets/img/logo.png";
      
        $this->load->view('home', $data);

    }
}
