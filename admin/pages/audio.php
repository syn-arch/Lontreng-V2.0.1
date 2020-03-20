<?php require '../assets/component/alert.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title pull-left">Data audio</h4>
                <div class="pull-right">
                <a href="../proses/audio/mass_delete.php" class="mass-hapus-audio btn btn-danger btn-fill">Hapus audio</a>
                <a href="#modal-audio" data-toggle="modal" class="tambah-audio btn btn-primary btn-fill">Tambah audio</a>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive p-5">
                <table class="table table-hover table-striped" id="tables-audio" style="width: 100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="check_all"></th>
                            <th>No</th>
                            <th>Nama Audio</th>
                            <th>Audio</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-audio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: -20px">
                <h4 class="modal-title">Tambah audio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../proses/audio/add_audio.php" method="POST" class="form-audio" enctype="multipart/form-data">
                    <input type="hidden" name="kd_audio" class="kd_audio">
                    <input type="hidden" name="audio" class="audio">
                    <div class="form-group">
                        <label for="nm_audio">Nama audio</label>
                        <input type="text" class="form-control nm_audio" name="nm_audio" placeholder="Nama audio">
                    </div>
                    <div class="form-group">
                        <label for="file_audio">File Audio</label>
                        <input type="file" class="form-control file_audio" name="file_audio" placeholder="File audio">
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