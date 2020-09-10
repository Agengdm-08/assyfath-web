<div class="row mb-3">
  <div class="col-12">
    <button class="btn btn-secondary" onclick="changeDiv()">
      <i class="fa fa-arrow-left">
      </i>
      Kembali
    </button>
  </div>
</div>

<form action="<?php echo site_url('admin/product/save') ?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Info Umum</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="no_pom">Nomor BPOM</label>
            <input type="number" id="no_pom" name="no_pom" class="form-control">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="kategori">
          </div>
          <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="10" style="min-height: 300px"></textarea>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-md-6">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Photo</h3>
        </div>
        <div class="card-body">
          <div class="form-group d-flex align-items-end">
            <img src="<?php echo asset_url('images/product/default.png') ?>" alt="Photo" class="img-thumbnail mr-3 w-50" id="photo-preview">
            <input type="file" class="form-control-file" id="photo" name="photo">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 mb-5">
      <a href="#" onclick="changeDiv()" class="btn btn-secondary">Batal</a>
      <input type="submit" value="Tambahkan" class="btn btn-primary float-right">
    </div>
  </div>
</form>

<script>
  $(function() {
    //Add text editor
    $('#description').summernote()
  })

  function readURL(input) {
    if (input.files) {
      const reader = new FileReader();

      reader.onload = function(e) {
        $('#photo-preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#photo").change(function() {
    readURL(this);
  });
</script>