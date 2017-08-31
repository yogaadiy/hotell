<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>">
</head>
<body>
	<div class="container">
		<div class="header">
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
							<li></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="content"><hr>
			<div class="row">
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
				<?php if (empty($this->session->userdata('user'))){ ?>
					<form method="get">
						<div class="panel-default">
						<div class="panel-heading">
							LOGIN
						</div>
						<div class="panel-body">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							<input type="submit" value="login" class="btn btn-danger">
						</div>
					</div>
					</form>
					<?php } ?>
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