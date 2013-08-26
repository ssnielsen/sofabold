<?php
	$msg = $this->session->flashdata('msg');
	if($msg){
		$msg = unserialize($msg);
	}

	$this->load->helper('url');
?>

<html>
<head>
	<meta charset="utf8"/>
	<title>Sofabold</title>
	<script type="text/javascript" src="<?= base_url() ?>static/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>static/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>static/js/tipsy.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>static/js/bootstrap-alert.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/960.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/tipsy.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>static/css/main.css">
</head>
<body>
	<header id="main">
		<nav class="navbar navbar-inverse">
			<div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
				<div class="container_24">
					<a class="brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>static/img/header_logo.png">  Sofabold</a>
					<ul class="nav">
						<li><a href="<?= base_url() ?>index.php/matches">Kampe</a></li>
						<!-- <li><a href="<?= base_url() ?>index.php/admin">Admin</a></li> -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<?php if($msg): ?>  
		<a class="close" data-dismiss="alert">×</a>  
		<div class="alert alert-<?= $msg['type'] ?>">
			<?= $msg['msg'] ?>
		</div>
	<?php endif ?>
	<section id="main">
		<div class="container_24">	