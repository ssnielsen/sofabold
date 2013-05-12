<?php
	$this->load->helper('url');
?>

<html>
<head>
	<meta charset="utf8"/>
	<title>Sofabold</title>
	<script type="text/javascript" src="<?= base_url() ?>static/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>static/js/tipsy.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/960.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/tipsy.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/main.css">
</head>
<body>
	<header id="main">
		<nav class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container_24">
					<a class="brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>static/img/header_logo.png">  Sofabold</a>
					<ul class="nav">
						<li><a href="<?= base_url() ?>index.php/matches">Kampe</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section id="main">
		<div class="container_24">	