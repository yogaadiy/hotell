<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>">
	<style type="text/css">
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
							<li><input type="text" placeholder="search" class="form-control" style="margin-top: 10px;"></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
			<div class="content3"><hr>
			<?php foreach ($view as $key) {?>
				<div class="row">
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">
								<?php echo $key->name ?>
							</div>
							<div class="panel-body">
								<img src="<?php echo base_url().'img/r2.jpg' ?>" style="object-fit: cover;width: 100%;height: 200px;">
							</div>
							<div class="panel-footer">
								<a href="<?php echo base_URL().'index.php/room/detail/'.$key->id ?>">detail</a>
							</div>
						</div>
					</div>
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">
								<?php 
									switch ($key->category) {
										case '1':
											echo "VIP";
											break;
										case '2':
											echo "EKONOMI";
											break;
										default:
											break;
									}
								 ?>
							</div>
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">
								EXSCLUSIVE
							</div>
							<div class="panel-body" style="background-image: url(<?php echo base_url().'img/r5.jpg' ?>);background-size: 100%;">
								<h1 style="object-fit: cover;height: 180px;color: #b31717;text-shadow: 4px 4px 4px #5a1010;transform: rotate(30deg);padding-top:50px;font-size: 70px;">EXPIRED</h1>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="footer"><hr>
			<div class="container">
				<ul class="list-inline">
				<li><a href="">Home</a></li>
				<li><a href="">.</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<p class="footer text-muted small">Copyrigt@2017	</p>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/jquery.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
</html>
	