<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Import Database</h4>
				<hr>
			</div>
			<div class="card-body">
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