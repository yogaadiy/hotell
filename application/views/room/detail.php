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
							<li><input type="text" placeholder="search" class="form-control" style="margin-top: 10px;"></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
			<div class="content3"><hr>
				<div class="row">
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">

							</div>
							<div class="panel-body">
								<img src="<?php echo base_url().'img/r2.jpg' ?>" style="object-fit: cover;width: 100%;height: 200px;">
							</div>
								<div class="footer">
							</div>
						</div>
					</div>
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">
								Detail
							</div>
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>Code Room</td>
										<td> :</td>
										<td><?php echo $detail['code_room']?></td>
									</tr>
									<tr>
										<td>Category</td>
										<td> :</td>
										<td>
											<?php
											switch($detail['category'])
											{
												case '1':
													echo 'VIP';
													break;
												case '2':
													echo 'EKONOMI';
													break;													
												default:
													break;
											} 
											?>
										</td>
									</tr>
									<tr>
										<td>Name</td>
										<td> :</td>
										<td><?php echo $detail['name']?></td>
									</tr>
									<tr>
										<td>Price</td>
										<td> :</td>
										<td><?php echo $detail['price'] ?></td>
									</tr>
									<tr>
										<td><a href="<?php echo base_url().'index.php/booking/index' ?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-book"></span> Book</button></a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-4"><hr>
						<div class="panel-default">
							<div class="panel-heading">
								Konsep room
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
				</div>
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
	