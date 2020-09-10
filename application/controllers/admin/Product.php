<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model');
    // $this->load->model('product_model');
  }

  public function index()
  {
    if ($this->input->get('filter')) {
      echo $this->input->get('filter');
    } else {
      $data['products'] = $this->app_model->master('product');
      $data['title'] = "Data Produk";
      $data["page"]  = 'admin/pages/product_view';
      $this->load->view('admin/index', $data);
    }
  }

  public function add()
  {
    $this->load->view('admin/pages/product_add');
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['detailproduct'] = $this->app_model->edit('product', 'id = ' . $id);

    $this->load->view('admin/pages/product_edit', $data);
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->app_model->hapus($id, 'id', 'product');
    $this->session->set_flashdata('message', 'Data produk berhasil dihapus.');
    redirect('admin/product');
  }

  public function save()
  {
    $in["name"] = $this->input->post('name');
    $in["no_pom"] = $this->input->post('no_pom');
    $in["kategori"] = $this->input->post('kategori');
    $in["description"] = $this->input->post('description');
    if (empty($this->input->post('id'))) {
      $in['photo'] = 'default.png';
    }

    // photo upload

    if (!empty($_FILES['photo']['name'])) {
      $date         = date('ymdhis');
      $namefile    = $_FILES['photo']['name'];
      $ext       = pathinfo($namefile, PATHINFO_EXTENSION);
      $namefile_tmp   = $date . '_' . md5(preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', '', $namefile));
      $namefile_fix  = $namefile_tmp . '.' . $ext;

      $config["file_name"]  = $namefile_fix;
      $config['upload_path']   = './assets/images/product';
      $config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
      $config['max_size']   = '50000';
      $config['max_width']   = '12000';
      $config['max_height']   = '12000';
      $config['create_thumb'] = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('admin/product');
      } else {
        $in['photo'] = $namefile_fix;
      }
    }

    if ($this->input->post('id')) {
      $in['id'] = $this->input->post('id');
      $this->app_model->update("product", $in, 'id');
      $this->session->set_flashdata('message', 'Data produk berhasil diubah.');
    } else {
      $this->app_model->simpan("product", $in);
      $this->session->set_flashdata('message', 'Data produk berhasil ditambahkan.');
    }
    redirect('admin/product');
  }
}

/* End of file Product.php */
