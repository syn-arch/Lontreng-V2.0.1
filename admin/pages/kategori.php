<?php require '../assets/component/alert.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title pull-left">Data Kategori</h4>
                <div class="pull-right">
                <a href="../proses/kategori/mass_delete.php" class="mass-hapus-kategori btn btn-danger btn-fill">Hapus Kategori</a>
                <a href="#modal-kategori" data-toggle="modal" class="tambah-kategori btn btn-primary btn-fill">Tambah Kategori</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive p-5">
                <table class="table table-hover table-striped tables" style="width: 100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="check_all"></th>
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
                    <button type="button" class="btn btn-link btn-secondary btn-fill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-link btn-info btn-fill">Simpan</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->