<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Produk Kami';
    $data['page'] = 'produk';
    $this->load->view('index', $data);
  }
}

/* End of file Produk.php */
