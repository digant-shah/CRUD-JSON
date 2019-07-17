<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="tutorial-boostrap-merubaha-warna">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>BrandGarage</title>
	<link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/custom.css">
	<style type="text/css">
		.navbar-default {
			background-color: #3b5998;
			font-size:18px;
			color:#ffffff;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= base_url("welcome") ?>">
				BrandGarage</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		</div>
	</div>
</nav>
<!-- /.navbar -->
<div class="container">
	<div class="row">
		<div class="col-sm-5 col-sm-offset-3"><h3>Create Employee</h3>
			<form method="POST" action="<?= base_url('welcome/insert') ?>">
				<div class="form-group">
					<label for="inputFName">First Name</label>
					<input type="text" class="form-control" required="required" id="inputFName" name="fname" placeholder="First Name">
					<span class="help-block"></span>
				</div>

				<div class="form-group ">
					<label for="inputLName">Last Name</label>
					<input type="text" class="form-control" required="required" id="inputLName" name="lname" placeholder="Last Name">
					<span class="help-block"></span>
				</div>

				<div class="form-group">
					<label for="inputAge">Age</label>
					<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
					<span class="help-block"></span>
				</div>
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<span class="help-block"></span>
				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-success">Create</button>
					<a class="btn btn btn-default" href="index_crudjson.php">Back</a>
				</div>
			</form>
		</div></div>
</div>
</body>
</html>
