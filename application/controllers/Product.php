<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Produk Kami';
    $data['page'] = 'product';
    $this->load->view('index', $data);
  }

  public function detail()
  {
    $id = $this->input->get('id');
    $data['title'] = 'Produk Kami';
    $data['subtitle'] = 'Detail';
    $data['page'] = 'product_detail';
    $data['id'] = $id;
    $this->load->view('index', $data);
  }
}

/* End of file Product.php */
