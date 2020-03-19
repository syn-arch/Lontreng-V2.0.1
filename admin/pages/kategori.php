<?php if (isset($_GET['msg'])): ?>
    <?php $msg = $_GET['msg'] ?>
    <?php if ($msg == 'added'): ?>
        <script>
            Swal.fire({
              icon: 'success',
              title: 'Data berhasil ditambahkan!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
  <?php endif ?>
  <?php if ($msg == 'updated'): ?>
    <script>
        Swal.fire({
          icon: 'success',
          title: 'Data berhasil diubah!',
          showConfirmButton: false,
          timer: 1500
      })
  </script>
<?php endif ?>
<?php if ($msg == 'deleted'): ?>
    <script>
        Swal.fire({
          icon: 'success',
          title: 'Data berhasil dihapus!',
          showConfirmButton: false,
          timer: 1500
      })
  </script>
<?php endif ?>
<?php endif ?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title pull-left">Data Kategori</h4>
                <a href="#modal-kategori" data-toggle="modal" class="tambah-kategori btn btn-primary btn-fill pull-right">Tambah Kategori</a>
            </div>
            <div class="card-body table-full-width table-responsive p-5">
                <table class="table table-hover table-striped tables" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: -20px">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../proses/kategori/add_kategori.php" method="POST" class="form-kategori">
                    <input type="hidden" name="kd_kategori" class="kd_kategori">
                    <div class="form-group">
                        <label for="nm_kategori">Nama Kategori</label>
                        <input type="text" class="form-control nm_kategori" name="nm_kategori" placeholder="Nama Kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-secondary btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-link btn-info btn-fill">Save changes</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->