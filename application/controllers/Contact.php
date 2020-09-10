<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Kontak Kami';
    $data['page'] = 'contact';
    $this->load->view('index', $data);
  }
}

/* End of file Contact.php */
