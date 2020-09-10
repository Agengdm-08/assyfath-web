<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Testimoni Pelanggan';
    $data['page'] = 'testimoni';
    $this->load->view('index', $data);
  }
}

/* End of file Testimoni.php */
