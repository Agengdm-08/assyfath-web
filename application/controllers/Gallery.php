<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Galeri Kami';
    $data['page'] = 'gallery';
    $this->load->view('index', $data);
  }
}

/* End of file Gallery.php */
