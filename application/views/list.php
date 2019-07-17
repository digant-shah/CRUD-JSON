<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>BrandGarage</title>
	<link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/custom.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="">
				BrandGarage</a>
		</div>
	</div>
</nav>
</br></br></br></br>
<div class="container">
	<div class="btn-toolbar">
		<a class="btn btn-primary" href="<?= base_url('welcome/insert') ?>"><i class="icon-plus"></i> Insert Data</a>
		<div class="btn-group"> </div>
	</div>
</div>
<br>
<br>
<div class="container">
	<div class ="row">
		<div class="col-md-9">
			<table class="table table-striped table-bordered table-hover" id="myTable">
				<thead>
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php $no=0;foreach ($jsonfile->records as $index => $obj): $no++;  ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $obj->fname; ?></td>
						<td><?php echo $obj->lname; ?></td>
						<td><?php echo $obj->age; ?></td>
						<td><?php echo $obj->gender; ?></td>
						<td>
							<a class="btn btn-xs btn-primary" href="<?= base_url('welcome/update/') ?><?php echo $index; ?>">Edit</a>
							<a class="btn btn-xs btn-danger" href="<?= base_url('welcome/delete/') ?><?php echo $index; ?>">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" type="application/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="application/javascript"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>
</html>
