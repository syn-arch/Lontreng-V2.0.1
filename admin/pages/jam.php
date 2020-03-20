<?php require '../assets/component/alert.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title pull-left">Data jam</h4>
                <div class="pull-right">
                <a href="../proses/jam/mass_delete.php" class="mass-hapus-jam btn btn-danger btn-fill">Hapus jam</a>
                <a href="#modal-jam" data-toggle="modal" class="tambah-jam btn btn-primary btn-fill">Tambah jam</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive p-5">
                <table class="table table-hover table-striped" id="tables-jam" style="width: 100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="check_all"></th>
                            <th>No</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-jam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: -20px">
                <h4 class="modal-title">Tambah jam</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../proses/jam/add_jam.php" method="POST" class="form-jam">
                    <input type="hidden" name="kd_jam" class="kd_jam">
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control jam" name="jam" placeholder="Nama jam">
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