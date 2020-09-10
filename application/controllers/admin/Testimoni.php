<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model');
    // $this->load->model('testimoni_model');
  }

  public function index()
  {
    $data['testimoni'] = $this->app_model->master('testimoni');
    $data['title'] = "Data Testimoni";
    $data["page"]  = 'admin/pages/testimoni_view';
    $this->load->view('admin/index', $data);
  }

  public function add()
  {
    $data['product'] = $this->app_model->master('product');
    $this->load->view('admin/pages/testimoni_add', $data);
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['product'] = $this->app_model->master('product');
    $data['detailtestimoni'] = $this->app_model->edit('testimoni', 'id = ' . $id, $data);

    $this->load->view('admin/pages/testimoni_edit', $data);
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->app_model->hapus($id, 'id', 'testimoni');
    $this->session->set_flashdata('message', ' Testimoni berhasil dihapus.');
    redirect('admin/testimoni');
  }

  public function save()
  {
    $in["name"] = $this->input->post('name');
    $in["product_id"] = $this->input->post('product_id');
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
      $config['upload_path']   = './assets/images/testimoni';
      $config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
      $config['max_size']   = '50000';
      $config['max_width']   = '12000';
      $config['max_height']   = '12000';
      $config['create_thumb'] = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('admin/testimoni');
      } else {
        $in['photo'] = $namefile_fix;
      }
    }

    if ($this->input->post('id')) {
      $in['id'] = $this->input->post('id');
      $this->app_model->update("testimoni", $in, 'id');
      $this->session->set_flashdata('message', ' Testimoni berhasil diubah.');
    } else {
      $this->app_model->simpan("testimoni", $in);
      $this->session->set_flashdata('message', ' Testimoni berhasil ditambahkan.');
    }
    redirect('admin/testimoni');
  }
}

/* End of file Testimoni.php */
