<?php require '../assets/component/alert.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title pull-left">Data jadwal</h4>
                        <br>
                        <br>
                        <select name="hari" id="hari" class="form-control pilih_hari">
                            <option value="pilih_hari">-- Pilih Hari --</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-right">
                            <a href="../proses/jadwal/mass_delete.php" class="mass-hapus-jadwal btn btn-danger btn-fill">Hapus jadwal</a>
                            <a href="#modal-jadwal" data-toggle="modal" class="tambah-jadwal btn btn-primary btn-fill">Tambah jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-full-width table-responsive p-5">
                <table class="table table-hover table-striped" id="tables-jadwal" style="width: 100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="check_all"></th>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Audio</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-jadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="margin-top: -50px">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: -20px">
                <h4 class="modal-title">Tambah audio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../proses/jadwal/add_jadwal.php" method="POST" class="form-jadwal">
                    <input type="hidden" name="kd_jadwal" class="kd_jadwal">
                    <input type="hidden" name="hari" class="hari">
                    <div class="form-group">
                        <label for="kd_kategori">Kategori</label>
                        <select name="kd_kategori" id="kd_kategori" class="form-control kd_kategori">
                            <option value="pilih_kategori">-- Pilih Kategori --</option>
                            <?php foreach (query("SELECT * FROM tb_kategori") as $row): ?>
                                <option value="<?php echo $row['kd_kategori'] ?>"><?php echo $row['nm_kategori'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kd_audio">Audio</label>
                        <select name="kd_audio" id="kd_audio" class="form-control kd_audio">
                            <option value="pilih_audio">-- Pilih Audio --</option>
                            <?php foreach (query("SELECT * FROM tb_audio") as $row): ?>
                                <option value="<?php echo $row['kd_audio'] ?>"><?php echo $row['nm_audio'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kd_jam">Jam</label>
                        <select name="kd_jam" id="kd_jam" class="form-control kd_jam">
                            <option value="pilih_jam">-- Pilih jam --</option>
                            <?php foreach (query("SELECT * FROM tb_jam") as $row): ?>
                                <option value="<?php echo $row['kd_jam'] ?>"><?php echo $row['jam'] ?></option>
                            <?php endforeach ?>
                        </select>
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
