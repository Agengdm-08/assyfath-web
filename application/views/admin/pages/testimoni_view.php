<div class="row" id="main-div">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel <?php echo $title ?></h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row mb-3">
          <button onclick="addDataButton('<?php echo site_url('admin/testimoni/add') ?>')" class="btn btn-primary ">Tambah Data</button>
        </div>

        <div class="table-responsive">
          <table id="testimoni-table" class="table table-bordered" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Photo</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($testimoni->result() as  $val) {
                $produk = $this->app_model->detail("product", "id", $val->product_id)->row_array();
                echo '<tr>
                        <td>' . $no . '</td>
                        <td>' . $val->name . '</td>
                        <td>' . $produk['name'] . '</td>
                        <td>' . $val->description . '</td>
                        <td>
                          <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Images" class="table-avatar" src="' . asset_url("images/testimoni/") .  $val->photo . '" style="width:50px">
                            </li>
                          </ul>
                        </td>
                        <td class="text-nowrap" id="aksi">
                          <a data-toggle="tooltip" data-placement="top" title="Edit" href="' . site_url("admin/testimoni/edit?id=$val->id") . '" id="edit" class="badge badge-warning"><i class="fa fa-pencil-alt"></i></a>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" href="' . site_url("admin/testimoni/delete?id=$val->id") . '" id="hapus" class="badge badge-danger"><i class="fa fa-trash" ></i></a>
                        </>
                      </tr>';
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div id="hasil"></div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Hapus data produk ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="button" id="deleteBtn" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>


<script>
  const message = `<?php echo $this->session->flashdata('message') ?>`;
  const error = `<?php echo $this->session->flashdata('error') ?>`;
  const title = `<?php echo $title ?>`
  $(document).ready(function() {
    if (message) {
      toastr.success(message);
    } else if (error) {
      toastr.error(error)
    }
  });


  $(function() {
    $("#testimoni-table").DataTable();
  })

  function changeDiv(res = "", open = false, id = "") {
    $('#hasil').html(res);
    if (open) {
      $('#main-div').hide();
      if (id == "edit") {
        $('#title').text(`Ubah ${title}`);
      } else {
        $('#title').text(`Tambah ${title}`);
      }
    } else {
      $('#main-div').show();
      $('#title').text(`${title}`);
    }
  }

  $('#aksi > a').click(function(e) {
    const id = this.id;
    e.preventDefault();
    if (id != 'hapus') {
      $.ajax({
        type: "GET",
        url: this,
        success: function(response) {
          changeDiv(response, true, id);
        }
      });
    } else {
      $('#deleteModal').modal('show');
      const deleteBtn = $('#deleteModal #deleteBtn');
      deleteBtn.attr('href', this.href)
    }
  });


  function addDataButton(link) {
    $.ajax({
      type: "POST",
      url: link,
      success: function(response) {
        changeDiv(response, true)
      }
    });
  }
</script>