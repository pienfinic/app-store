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
					
				</div>
			</div>
		</nav>
		
		
			<div class="row">
				<button type='button' class='btn btn-success btn-block'></button>
		</div>
		<br />
	<div style="margin-left:20px; font-family:Arial;width:200px; height:60px; font-size:20px;color:black; border:1px solid #d7d7d7;padding:5px;border-radius:5px;">
		 merci<br />
	<span class="glyphicon glyphicon-edit"></span> 
		<span style="color:red;" class="glyphicon glyphicon-user"></span>
	</div>	
		
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	
	</script>
	</body>
</html>