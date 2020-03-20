<?php require '../assets/component/alert.php'; ?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Import Database</h4>
				<hr>
			</div>
			<div class="card-body">
				<ul class="text-danger">
					<li>Buatlah sebuah database baru dengan nama db_bel</li>
					<li>Klik tombol Choose File</li>
					<li>Cari file *.sql</li>
					<li>Klik Open</li>
					<li>Klik tombol IMPORT</li>
					<li>Tunggu beberapa saat hingga muncul pemberitahuan</li>
					<li>Import database berhasil</li>
				</ul>
				<form action="../proses/import_database.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="sql">File SQL</label>
						<input type="file" class="form-control" name="sql" required="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-fill btn-block">IMPORT</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>