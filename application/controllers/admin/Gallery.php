<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model');
    // $this->load->model('gallery_model');
  }

  public function index()
  {
    $data['gallery'] = $this->app_model->master('gallery');
    $data['title'] = "Gallery Photo";
    $data["page"]  = 'admin/pages/gallery_view';
    $this->load->view('admin/index', $data);
  }

  public function add()
  {
    $this->load->view('admin/pages/gallery_add');
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['detailgallery'] = $this->app_model->edit('gallery', 'id = ' . $id);

    $this->load->view('admin/pages/gallery_edit', $data);
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->app_model->hapus($id, 'id', 'gallery');
    $this->session->set_flashdata('message', 'Data photo berhasil dihapus.');
    redirect('admin/gallery');
  }

  public function save()
  {
    $in["name"] = $this->input->post('name');
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
      $config['upload_path']   = './assets/images/gallery';
      $config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
      $config['max_size']   = '50000';
      $config['max_width']   = '12000';
      $config['max_height']   = '12000';
      $config['create_thumb'] = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('admin/gallery');
      } else {
        $in['photo'] = $namefile_fix;
      }
    }

    if ($this->input->post('id')) {
      $in['id'] = $this->input->post('id');
      $this->app_model->update("gallery", $in, 'id');
      $this->session->set_flashdata('message', 'Data photo berhasil diubah.');
    } else {
      $this->app_model->simpan("gallery", $in);
      $this->session->set_flashdata('message', 'Data photo berhasil ditambahkan.');
    }
    redirect('admin/gallery');
  }
}

/* End of file Gallery.php */
