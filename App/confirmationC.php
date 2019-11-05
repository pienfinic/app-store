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
				<button type='button' class='btn btn-success btn-block'>verifiez ta boite email</button>
				<div class="col-sm-4" style="background-color: white">
					
				</div>
				<div class="col-sm-4"><br /><br /><br /><br /><br /><br /><br />
					<p style="text-align: center; font-size:1cm;color:green; ">
						<span style="font-size:30px; font-family:Arial;">Enter your code.....</span>
						
					</p>
					
					<div class="container-fluid text-left">
					<form action="../containeur.php" method="post">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicons glyphicons-keys"></span>
							<input id="confimationCode" name="usrName" type="text" class="form-control input-lg" name="email" placeholder="_ _ _ _"/>
						</div><br />
					</form>
					<span style="text-align: center; font-size:1cm;color:green; margin-left: 90px; "><img id="imgload" src="../image/unnamed (1).gif" width="200"></span>
				</div>
				<div class="col-sm-4" style="background-color: lavender">
					
				</div>
			</div>
		</div>
		
	<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#imgload").hide();
			$("#confimationCode").keyup(function(){
				$("#imgload").show();
					var variable = $("#confimationCode").val();
					var donnes ={
						"ac":04,
						"code":variable
					}
					$.post("../containeur.php" ,donnes,function(confir){
						confir = eval(confir);
						
						if(variable == confir[0].code){
							$("#imgload").hide();
							 var email = confir[0].email;
								window.location.href="administration.php?nom="+email;
						}
					});	
				
			});
		});
	</script>
	</body>
</html>