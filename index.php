<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="input/build/css/intlTelInput.css" />
		
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
							<a href="./index.php">Home</a>
						</li>
						<li class="active">
							<a href="App/application.php">Application</a>
						</li>
						<li class="active">
							<a href="App/login.php">Administration</a>
						</li>
						<li class="active">
							<a href="App/login.php">Coordova</a>
						</li>
						<li class="active">
							<a href="#">About</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="App/login.php"><span class="glyphicon glyphicon-user"> Login</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<button type='button' class='btn btn-success btn-block'></button>
		<div  class="container-fluid text-left" style="background-image:url("image/IMG-20171201-WA0032.jpg;")">
			
			<div id="containeur" class="row">
				
				<div class="col-sm-9" >
					<div id="enregistrementSuccess"> </div>
					<br /> <br />
					<div id = "myCarousel" class="carousel slide" data-ride="caousel">
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1" ></li>
										<li data-target="#myCarousel" data-slide-to="2" ></li>
									</ol>
									
									<div class="carousel-inner">
										<div class="item active">
											<img src="image/icon.png" alt="numero1" style="width:100%; height:550px;">
										</div>
										<div class="item">
											<img src="image/bg.jpg" alt="numero1" style="width:100%; height:550px;">
										</div>
										<div class="item">
											<img src="image/nfinic.jpg" alt="numero1" style="width:100%; height:550px;">
										</div>
									</div>
									
									<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide"next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
									
								</div>
				</div>
				
				<div class="col-sm-3" >
					<form action="containeur.php" method="post" id="myForm" enctype="multipart/form-data">
						<div class="form-group">
							<input hidden type="text" name="ac" value="01" />
							<label for="email">Noms: </label>
							<input id="noms" type="text" placeholder="Nom Prenom" name="noms" class="form-control" id="email" />
							<div id="nomsErr"></div>
							<label for="email">Pays: </label><br />
							<input  type="text" id="inputPaysId"  name="pays" class="form-control"  />
							<label for="email">Email address : </label>
							<input id="emailUtilisateur" type="text" placeholder="exit@domaine.com" name="email" class="form-control" id="email" />
							<div id="emailError"></div>
							<label for="email">Mot de passe : </label>
							<input id="password" type="password" placeholder="Entrer mot de passe" name="pwd" class="form-control" id="email" />							
							<label for="text">Confirmation : </label>
							<input id="confirmPassword" type="password" placeholder="Entrer mot de passe" class="form-control" id="email" />
							<div id="newInput"></div>
							<div id="erreurMot"></div>	
							<br /><button type="button" id="envoyerInfo" class="btn btn-success btn-block">Submit</button>
						</div>
					</form>	
				</div>
				
				<div id="zoneAffichageTexte" >
					
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="input/build/js/intlTelInput.js"></script>
		<script type="text/javascript">
							 
   								 function obtenirNomPays(){
   								 	
   								 	
   								 }
   								 
   								 function send(){
   								 	var countryData = $("#phone").intlTelInput("getSelectedCountryData");
   								 		document.write(countryData.name);
   								 		
   								 	document.getElementId("myForm").submit();
   								 }
   								 
   								 
   								 
   								 $(function(){
   								 	$("#noms").keyup(function(){
   								 		var inputNom = $("#noms").val();
   								 		$.post("verification.php",{
   								 			"ac":102,
   								 			"noms": inputNom,
   								 		},function(valeurNom){
   								 			if(valeurNom == "2"){
   								 				$("#nomsErr").html('<button id="un" type="button" class="btn btn-danger btn-block">noms existe deja</button>');
   								 				$("#noms").focus();
   								 				$("#noms").css("border","1px solid red");
   								 			}else{
   								 				$("#un").hide();
   								 				$("#noms").css("border","1px solid #ccc");
   								 			}
   								 		});
   								 	});
   								 	
   								 	$("#emailUtilisateur").keyup(function(){
   								 		  var inputN = $("#emailUtilisateur").val();
   								 		$.post("verification.php",{
   								 			"entree":inputN,
   								 			"ac":101,
   								 			},function(data){
   								 			if(data == "1"){
   								 				$("#emailError").html('<button id="un" type="button" class="btn btn-danger btn-block">email existe deja</button>');
   								 				$("#emailUtilisateur").focus();
   								 				$("#emailUtilisateur").css("border","1px solid red");
   								 			}else{
   								 				$("#un").hide();
   								 				$("#emailUtilisateur").css("border","1px solid #ccc");
   								 			}
   								 		});
   								 	
   								 	});
   								 	
   								 	
   								 	$("#inputPaysId").intlTelInput();
   								 	
   								 	$("#inputPaysId").click(function(){
   									 	obtenirNomPays();
   									 });
   								 	
   								 	$("#envoyerInfo").click(function(){
   								 		
   								 		var noms = $("#noms").val(),mail = $("#emailUtilisateur").val(), password = $("#password").val(), pwdconfirme= $("#confirmPassword").val();
   								 		var pays = $("#inputPaysId").intlTelInput("getSelectedCountryData").name;
   								 		
   								 		if(password == pwdconfirme){
   								 		
   								 		var donnees = {
   								 			"ac":01,
   								 			"nom":noms,
   								 			"pays":pays,
   								 			"pwd":password,
   								 			"email":mail
   								 		};
   								 		
   								 		$.post("containeur.php",donnees,function(duServeur){
   								 			//alert("salut le monde");
   								 			$("#zoneAffichageTexte").html(duServeur);	
   								 		});
   								 			
   								 			$("#enregistrementSuccess").html("<br><button type='button' class='btn btn-success btn-block'>Enregistrement avec succes un message envoye a votre email pour la  confirmation</button><br/>");
   								 			window.location.href="App/confirmationC.php";
   								 		} else{
   								 			
   								 			$("#erreurMot").html('<label><input id="chk" type="checkbox" />Faire voir</label><br><button id="un" type="button" class="btn btn-danger btn-block"> Erreur lors de la confirmation de mot de passe</button>');
   								 			$("#confirmPassword").css("border","1px solid red");
   								 				$("#chk").click(function(){
   								 					$("#confirmPassword").hide();
   								 					$("#newInput").html('<input id="confirmPassword" type="text" name="noms" class="form-control" />');
   								 					$("#confirmPassword").focus();
   								 					$("#newInput").css("border","1px solid red");
   								 					
   								 				});
   								 		}
   								 		
   								 	});
   								 	
   								 	$("#email").keypress(function(){
   								 		var donnees = $(this).val();
   								 		$.post("test.php",{"entree":donnees},function(d){
   								 			if(d == "eliel"){
   								 				$("#email").css("border","1px solid red");
   								 			}else{
   								 				$("#zoneAffichageTexte").html("<h1>Cet utilisateur existe deja</h1>");
   								 				$("#email").css("border","1px solid #d7d7d7");
   								 			}
   								 		});
   								 	});
   								 	
   								 	
   								 	
   								 	$("#inputPaysId").change(function(){
   								 		alert("hello");
   								 	});
   								 });
   								 
   								 
   								 
  							</script>
		
	</body>
</html>