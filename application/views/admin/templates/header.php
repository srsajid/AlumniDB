<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="static/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="static/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?= $title; ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<link href="<?php echo base_url("static/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("static/css/animate.min.css") ?>" rel="stylesheet">

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url("static/css/themify-icons.css") ?>" rel="stylesheet">
	<link href="<?php echo base_url("static/css/paper-dashboard.css") ?>" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">
		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="#" class="simple-text">
					Alumni DB
				</a>
			</div>
			<ul class="nav">
				<li class="<?= $active == "member" ? "active" : "" ?>">
					<a href="<?= site_url("admin/member/lists") ?>">
						<i class="ti-view-list-alt"></i>
						<p>Member List</p>
					</a>
				</li>
				<li class="<?= $active == "user" ? "active" : "" ?>">
					<a href="<?= site_url("admin/user/lists") ?>">
						<i class="ti-user"></i>
						<p>User Profile</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar bar1"></span>
						<span class="icon-bar bar2"></span>
						<span class="icon-bar bar3"></span>
					</button>
					<a class="navbar-brand" href="#"><?= $title ?></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?= site_url("user/logout") ?>">
								<i class="ti-power-off"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>

