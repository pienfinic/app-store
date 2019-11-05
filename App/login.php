<?php
session_start();
if(!empty($_GET)){
	$_SESSION['username_admin'] = $_GET['admin'];
}
  

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
		<style>
			.navbar{
				margin-bottom:0;
				border-radius:0;
			}s
			a{
				color:white;
			}
			a:hover{
				background-color:white!important;
				color:black!important;
			}
			#containeur{
				//background-image:url("image/bg.jpg");
				position:relative;
				height:15cm;
				
				background-size:cover;
			}
			#logo{
				font-size:1cm;
				color:#d7d7d7;
			}
		
		</style>
	</head>
	<body>
<nav class="navbar navbar-inverse" >
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
							<span  id="logo1" style="font-size:40px;color:green; border:1px solid #d7d7d7;padding:1px;border-radius:5px;" class="glyphicon glyphicon-birthdays-cake">S</span>
							<span style="color:green; font-family:Arial; text-align:center; font-size:0.6cm;color:green;">toreApp</span>
				</div>
				<div class="collapse navbar-collapse"id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="../index.php">Home</a>
						</li>
						<li class="active">
							<a href="application.php">Application</a>
						</li>
						<li class="active">
							<a href="#">About</a>
						</li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="login.php"><span class="glyphicon glyphicon-user"> username</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		
			<div class="row">
				<button type='button' class='btn btn-success btn-block'></button>
				<div class="col-sm-4" style="background-color: lavender">
				</div>
				<div class="col-sm-4"><br /><br /><br /><br /><br /><br /><br />
					<p style="text-align: center; font-size:1cm;color:green; ">
						<span style="font-size:20px; font-family:Arial;">welcome to</span>
						<span  id="logo1" style="font-size:40px;color:green; border:1px solid black;padding:1px;border-radius:5px;" class="glyphicon glyphicon-birthdays-cake">S</span><span style="color:green; font-family:Arial; text-align:center; font-size:20px;color:green;">toreApp</span>
					</p>
					<div class="container-fluid text-left">
					<form action="../containeur.php" method="post">
						<div class="input-group">
							<input hidden type="text" name="ac" value="02" />
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" name="usrName" type="text" class="form-control" name="email" placeholder="Email"/>
						</div><br />
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" name="pwdUsr" type="password" class="form-control" name="password" placeholder="Password"/>
						</div>
						<label><input type="checkbox" />Remember me</label>
						<div id="erreur"><?php 
							if(!empty($_GET['err'])){
								echo '
								<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
								<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
								<script>
									$(document).ready(function(){
											//alert("merci");
										$("#erreur").css("color":"red");
									});
								
								</script>';
							}
							
							?></div>
						<button type="submit" id="con" class="btn btn-success btn-block">Submit</button>
					</form>
				</div>
				<div class="col-sm-4" style="background-color: lavender">
				</div>
			</div>
		</div>
		
	
	</body>
</html>