<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->login = true;
    $this->name = "Irfana Sandi";
  }


  public function index()
  {
    if (!$this->login) {
      redirect('auth');
    }
    $data['title'] = "Dashboard";
    $data["page"]  = 'admin/pages/dashboard';
     $this->load->view('admin/index', $data);
  }
}

/* End of file Home.php */
