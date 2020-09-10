<?php
$data = $detailpost->row_array();
?>
<div class="row mb-3">
  <div class="col-12">
    <button class="btn btn-secondary" onclick="changeDiv()">
      <i class="fa fa-arrow-left">
      </i>
      Kembali
    </button>
  </div>
</div>

<form action="<?php echo site_url('admin/post/save') ?>" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
  <div class="row">
    <div class="col-md-6">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Info Umum</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control" value="<?php echo $data['judul'] ?>">
          </div>
          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" name="isi" id="isi" rows="10" style="min-height: 300px">
            <?php echo $data['isi'] ?>
            </textarea>
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
            <img src="<?php echo asset_url('images/post/') . $data['photo'] ?>" alt="Photo" class="img-thumbnail mr-3 w-50" id="photo-preview">
            <input type="file" class="form-control-file" id="photo" name="photo">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 mb-5">
      <a href="#" onclick="changeDiv()" class="btn btn-secondary">Batal</a>
      <input type="submit" value="Ubah" class="btn btn-primary float-right">
    </div>
  </div>
</form>

<script>
  $(function() {
    //Add text editor
    $('#isi').summernote()
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