<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>">
	<style type="text/css">
		.img:hover{opacity: 0.6}
		.logointy{font-size: 50px;background-color:#6dade0;padding: 10px;margin-bottom: 20px;border-radius: 0px 30px 0px 30px;color: #ddd; }
		.coment1{color: #6dade0;font-size: 20px;}
		.coment{font-size: 20px;}
		.logo{margin-bottom: 15px;}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<span class="logointy">HJI</span><span class="coment">Hotel Lokal dengan Fasilitas internasional </span><span class="coment1"> | Hotel Jepara Indah</span>
			</div>
			<nav class="navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="<?php echo base_url().'index.php/home/index'; ?>" class="navbar-brand">Home</a>
					</div>
					<div class="collapse navbar-collapse" id="nav">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">User <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url().'index.php/user/index' ?>">LOGIN</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url().'index.php/room/index' ?>">ROOM</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><input type="text" placeholder="search" class="form-control" style="margin-top: 10px;width: 90%"></li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="carousel" class="carousel slide" data-ride="carousel"><hr>
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo base_url().'img/c2.jpg' ?>" style="object-fit: cover;width: 100%;height: 400px;">
					</div>
					<div class="item">
						<img src="<?php echo base_url().'img/c3.jpg' ?>" style="object-fit: cover;width: 100%;height: 400px;">
					</div>
					<div class="item">
						<img src="<?php echo base_url().'img/c1.jpg' ?>" style="object-fit: cover;width: 100%;height: 400px;">
					</div>
				</div>
				<a href="#carousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#carousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="content">
			<div class="content1"><hr>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url().'img/r1.jpg' ?>" style="object-fit: cover;width: 100%;height: 250px">
					</div>
					<div class="col-md-8">
						<h2>ROOM VIP</h2>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br><br><br><br>
						<?php echo date('Y-M-d') ?>
					</div>
				</div>
			</div>
			<div class="content2"><hr>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url().'img/r3.jpg' ?>" style="object-fit: cover;width: 100%;height: 250px">
					</div>
					<div class="col-md-8">
						<h2>ROOM EKONOMI</h2>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br><br><br><br>
						<?php echo date('Y-M-d') ?>
					</div>
				</div>
			</div>
			<div class="content3"><hr>
				<div class="row">
					<div class="col-md-4">
						<div class="panel-default">
							<div class="panel-heading">
								EXSCLUSIVE
							</div>
							<div class="panel-body">
								<div class="cover" style="background-color: black;background-size: 100%;height: 200px;">
									<img class="img" src="<?php echo base_url().'img/r2.jpg' ?>" style="object-fit: cover;width: 100%;height: 200px;">
								</div>
							</div>
							<div class="panel-footer">
								<a href="<?php echo base_url().'index.php/room/index' ?>">see list room</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel-default">
							<div class="panel-heading">
								EXSCLUSIVE
							</div>
							<div class="panel-body">
								<div class="cover" style="background-color: black;background-size: 100%;height: 200px;">
									<img class="img" src="<?php echo base_url().'img/r2.jpg' ?>" style="object-fit: cover;width: 100%;height: 200px;">
								</div>
							</div>
							<div class="panel-footer">
								<a href="<?php echo base_url().'index.php/room/index' ?>">see list room</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel-default">
							<div class="panel-heading">
								EXSCLUSIVE
							</div>
							<div class="panel-body">
								<div class="cover" style="background-color: black;background-size: 100%;height: 200px;">
									<img class="img" src="<?php echo base_url().'img/r2.jpg' ?>" style="object-fit: cover;width: 100%;height: 200px;">
								</div>
							</div>
							<div class="panel-footer">
								<a href="<?php echo base_url().'index.php/room/index' ?>">see list room</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer"><hr>
			<ul class="list-inline">
				<li><a href="">Home</a></li>
				<li><a href="">.</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<p class="footer text-muted small">Copyrigt@2017	</p>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/jquery.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
</html>