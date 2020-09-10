<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model');
    // $this->load->model('mitra_model');
  }

  public function index()
  {
    $data['mitra'] = $this->app_model->master('mitra');
    $data['title'] = "Data Mitra";
    $data["page"]  = 'admin/pages/mitra_view';
    $this->load->view('admin/index', $data);
  }

  public function add()
  {
    $this->load->view('admin/pages/mitra_add');
  }

  public function edit()
  {
    $id = $this->input->get('id');
    $data['detailmitra'] = $this->app_model->edit('mitra', 'id = ' . $id);

    $this->load->view('admin/pages/mitra_edit', $data);
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->app_model->hapus($id, 'id', 'mitra');
    $this->session->set_flashdata('message', ' Mitra berhasil dihapus.');
    redirect('admin/mitra');
  }

  public function save()
  {
    $in["name"] = $this->input->post('name');
    $in["no_hp"] = $this->input->post('no_hp');
    $in["alamat"] = $this->input->post('alamat');
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
      $config['upload_path']   = './assets/images/mitra';
      $config['allowed_types'] = 'bmp|gif|jpg|jpeg|png';
      $config['max_size']   = '50000';
      $config['max_width']   = '12000';
      $config['max_height']   = '12000';
      $config['create_thumb'] = TRUE;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('photo')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('admin/mitra');
      } else {
        $in['photo'] = $namefile_fix;
      }
    }

    if ($this->input->post('id')) {
      $in['id'] = $this->input->post('id');
      $this->app_model->update("mitra", $in, 'id');
      $this->session->set_flashdata('message', ' Mitra berhasil diubah.');
    } else {
      $this->app_model->simpan("mitra", $in);
      $this->session->set_flashdata('message', ' Mitra berhasil ditambahkan.');
    }
    redirect('admin/mitra');
  }
}

/* End of file Mitra.php */
