<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model');
    // $this->load->model('post_model');
  }

  public function index()
  {
    $data['post'] = $this->app_model->master('post');
    $data['title'] = "Data Post";
    $data["page"]  = 'admin/pages/post_view';
    $this->load->view('admin/index', $data);
  }

  public function add()
  {
    $this->load->view('admin/pages/post_add');
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['detailpost'] = $this->app_model->edit('post', 'id = ' . $id);

    $this->load->view('admin/pages/post_edit', $data);
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->app_model->hapus($id, 'id', 'post');
    $this->session->set_flashdata('message', ' Post berhasil dihapus.');
    redirect('admin/post');
  }

  public function save()
  {
    $in["judul"] = $this->input->post('judul');
    $in["isi"] = $this->input->post('isi');
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
      $config['upload_path']   = './assets/images/post';
      $config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
      $config['max_size']   = '50000';
      $config['max_width']   = '12000';
      $config['max_height']   = '12000';
      $config['create_thumb'] = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('admin/post');
      } else {
        $in['photo'] = $namefile_fix;
      }
    }

    if ($this->input->post('id')) {
      $in['id'] = $this->input->post('id');
      $this->app_model->update("post", $in, 'id');
      $this->session->set_flashdata('message', ' Post berhasil diubah.');
    } else {
      $this->app_model->simpan("post", $in);
      $this->session->set_flashdata('message', ' Post berhasil ditambahkan.');
    }
    redirect('admin/post');
  }
}

/* End of file Post.php */
