
<?php 
	
	$kd = $_SESSION['kd_user'];
	$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = '$kd'"));

 ?>
<?php require '../assets/component/alert.php'; ?>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Profile Saya</h4>
			</div>
			<div class="card-body">
				<form action="../proses/update_profile.php" method="POST">
					<div class="form-group">
						<label for="email">Nama User</label>
						<input type="text" class="form-control" name="nm_user" placeholder="Nama User" value="<?php echo $user['nm_user'] ?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email'] ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info btn-fill btn-block">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>