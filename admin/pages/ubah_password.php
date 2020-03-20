
<?php require '../assets/component/alert.php'; ?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Ubah Password</h4>
			</div>
			<div class="card-body">
				<form action="../proses/change_password.php" method="POST">
					<div class="form-group">
						<label for="pw_lama">Password Lama</label>
						<input type="password" class="form-control" name="pw_lama" placeholder="Password Lama" required="">
					</div>
					<div class="form-group">
						<label for="pw1">Password Baru</label>
						<input type="password" class="form-control" name="pw1" placeholder="Password Baru" required="">
					</div>
					<div class="form-group">
						<label for="pw2">Konfirmasi Password Baru</label>
						<input type="password" class="form-control" name="pw2" placeholder="Konfirmasi Password Baru" required="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-fill btn-block">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>