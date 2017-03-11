<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link href="<?php echo base_url("static/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("static/css/dcalendar.picker.css") ?>" rel="stylesheet">
	<script src="<?php echo base_url("static/js/jquery-3.1.1.min.js") ?>"></script>
	<script src="<?php echo base_url("static/bootstrap/js/bootstrap.min.js") ?>"></script>
</head>
	<body>
		<div class="container">
			<div class="row">
				<?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert">
							<?= validation_errors() ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
				<?php endif; ?>
				<?php if (isset($success)) : ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?= $success ?></div>
					</div>
				<?php endif; ?>
				<div class="col-md-12">
					<div class="page-header">
						<h1>Login</h1>
					</div>
					<?= form_open() ?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-default" value="Login">
						</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</body>
</html>