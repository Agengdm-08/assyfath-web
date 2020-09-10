<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Home';
    $data['page'] = 'homepage';
    $this->load->view('index', $data);
  }
}

/* End of file Homepage.php */
