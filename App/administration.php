<?php
session_start();
if(!empty($_GET) or !empty($_SESSION)){
	if(!empty($_GET['nom'])){
		$_SESSION['username_admin'] = $_GET['nom'];
	}else if(!empty($_GET['admin'])){
		$_SESSION['username_admin'] = $_GET['admin']; 
	}else{
		$_SESSION['username_admin']= "";
	}
}
	


?>
<!DOCTYPE html>
<html>
	<head>
		<title>administration</title>
		<meta charse="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
		<style>
			.navbar{
				margin-bottom:0;
				border-radius:0;
			}
			a{
				color:white;
			}
			a:hover{
				background-color:white!important;
				color:black!important;
			}
			#logo{
				font-size:1cm;
				color:#d7d7d7;
			}
			
			
			.image-upload > input{
				
				display : none;
				}
			#logo1:hover{
				box-shadow:0px 0px 0px 4px #d7d7d7;
									
			}
			#logo2:hover{
				box-shadow:0px 0px 0px 4px #d7d7d7;
									
			}
			#logo3:hover{
				box-shadow:0px 0px 0px 4px #d7d7d7;
									
			}
			#upload09898:hover{
				box-shadow:0px 0px 0px 4px #d7d7d7;
									
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
							<span style="font-size:40px;color:green; border:1px solid #d7d7d7;padding:1px;border-radius:5px;" class="glyphicon glyphicon-birthdays-cake">S</span>
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
							<a href="cordova.php">Coordova</a>
						</li>
						<li class="active">
							<a href="#">About</a>
						</li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="login.php" data-toggle="popover" title="Pupover" data-placement="bottom" data-content="some fadfkladf;aldfjadlfa;3elja;sdlkfjadslfjaskdfl"><span class="glyphicon glyphicon-user"><?php echo " ".$_SESSION['username_admin']; ?></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid text-center">
			<div class="row">
				<button type='button' class='btn btn-success btn-block'></button>
				<div class="col-sm-4" >
					<br />
					
					<h3>Etat de l'application</h3> 
					<div class="panel-groud">
					<div class="panel panel-success">
						<div class="panel-heading">Pourquoi cette platforme</div>
						<div class="panel-body"> Rendre ton appliacation pupolaire</div>
						<div class="panel-body"> Simple a utiliser et gratuitement</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading"> Mes applications </div>
						<div class="panel-body">
							<div style="style="font-size:40px;width:50px;height:50px;background-color:red; color:green; border:4px solid #d7d7d7;padding:5px;" id="toutesApplications"> je suis en train de chercher l argent </div> <br/><br/>
							
							
							<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="examleModalongTitle" arial-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div style="background-color:#dddddd;" class="modal-header">
											<h5 style="font-family:Arial; font-size:25px; color:black; class="modal-title" id="examleModalongTitle"><div id="nomAppModifier"></div></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"></span>
											</button>
										</div>
										<div class="modal-body">
											
										<form action="" method="post">
											<div class="form-group">
							<label for="comment">Nouvelle version </label>
							<input type="text" name="versionApp" class="form-control" id="usr">
							
							<label for="comment">Commentaire sur la version : </label>
							<textarea class="form-control" rows="5" name="commentaireApp" id="comment"></textarea>
							<br />
							<span id="upload09898" style="font-size:40px;width:50px;height:50px; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;" class="glyphicon glyphicon-cloud-upload"></span>
						</div>
					</form>
											
										</div>
										<div style="background-color: " class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-success"> Modifier</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
			
				</div>
				
				</div>
				<div class="col-sm-4">
					<br />
					<h3>Elements graphiques</h3> 
					<div class="container-fluid text-center">
						<div class="row">
							<div class="col-sm-4">
								le logo de l'application
								<br />
								<form action="../containeur.php" method="post" enctype="multipart/form-data">
								<div class="image-upload">
									<input hidden type="text" name="ac" value="03" />
									<label for="image">
									<br /><br />
											<img id="afficheLogoNew" style="font-size:100px;width:70%;height:100%; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;"/>
											<span  id="logo1" style="font-size: 60px;color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;" class="glyphicon glyphicon-cloud-upload"></span>
									</label>
											
											<div hidden><input id="logoNew" name="logoNewNom"  accept="image/jpg" type="file" /></div>
								</div>
								
								
								<style>
									
								</style>
								
							</div>
							<div class="col-sm-4" >
								la l'interface principale<br />
								
									<div class="image-upload">
									<label for="image">
									<br /><br />
										<img id="afficheLogo2New" style="font-size:100px;width:70%;height:100%; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;"/>
										<span id="logo2" style="font-size: 60px;color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;" class="glyphicon glyphicon-cloud-upload"></span>
									</label>
										<input hidden name="logo2NewNom" id="logo2New"  accept="image/*" type="file" />
								</div>
							
								
								<style>
									.image-upload > input{
										display : none;
									}
								</style>
								
							</div>
							<div class="col-sm-4">
								Autre image de l'application
								
									<div class="image-upload">
				
									<br /><br />
											<img id="afficheLogo3New" style="font-size:100px;width:70%;height:100%; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:2px;"/>
											<span id="logo3"style="font-size: 60px;color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;" class="glyphicon glyphicon-cloud-upload"></span>
											<input hidden name="logo3NewNom" id="logo3New"  accept="image/*" type="file" />
									
								</div>
								
								
								<style>
									.image-upload > input{
										display : none;
									}
								</style>
								
								<br />
								
							</div>
						</div>
						<H3> Application </H3>
						
									<div  id="zonePhoto">
										<label>
									<br /><br />
										<img id="notreDame" src="" style="font-size:100px;width:50%;height:100%; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;"/>
										<span id="upload09898" style="font-size:100px;width:100%;height:100%; color:green; border:1px solid #d7d7d7;padding:5px;border-radius:5px;" class="glyphicon glyphicon-cloud-upload"></span>
									<div id="leNom"> application .apk</div></label>
									
								</div>
								<div hidden><input id="image3" name="imageApp" accept="image/*apk" type="file" /></div>
								
					</div>
				</div>
				
				<div class="col-sm-4">
				<br />
					<h3>Information sur le produit</h3> 
					
						<div class="form-group">
							<label for="usr">Nom : </label>
							<input type="text"name="nomApp" class="form-control" id="usr" />
							
							<label for="usr">Domaine de l'application : </label>
								<select type="text" name="domaineApp" class="form-control">
									<option>Jeux</option>
									<option>Blague</option>
									<option>Cours</option>
									<option>gestion</option>
									<option>realiter virtuelle</option>
									<option>Enseignement</option>
									<option>Cours</option>
									<option></option>
								</select>
							
							<label for="usr">Version de l'application : </label>
							<input type="text" name="versionApp" class="form-control" id="usr">
							
							<label for="comment">Commentaire sur l'application : </label>
							<textarea class="form-control" rows="5" name="commentaireApp" id="comment"></textarea><br />
							<button type="submit" class="btn btn-success btn-block">Submit</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				
				$("#zoneEdiction").html('<option>je suis la</option>');
				$("#zoneEdiction").click(function(){
					alert("merci maman");
				});
				$('[data-toggle="popover"]').popover();
				$.post("../containeur.php" ,{"ac":20},function(data){
					data = eval(data);
					 var text = "";
						for(var i = 0;i < data.length; i++){
							text += "<li id='une' class='list-group-item'>" + data[i].app + '</li><button id="testPopup" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Modifier '+ data[i].app +' <span class="glyphicon glyphicon-edit"></span></button><br />';
							
						};
							$("#toutesApplications").append(text);
							
				});
				$(this).click(function(){
					var usersid =  $(event.target).text();
					$("#nomAppModifier").html(usersid);
				});
				$('[data-toggle="popover"]').popover();
				
				$("#afficheLogoNew").hide();
				$("#logo1").click(function(){
					$("#logoNew").trigger("click");
					$("#logo1").hide();
					$("#afficheLogoNew").show();
					
				});
				
				
				$("#logoNew").change(function(){
					var reader = new FileReader();
					
					reader.onload = function(e){
						$("#afficheLogoNew").attr("src",e.target.result);
					};
					
					reader.readAsDataURL(this.files[0]);
				});
				
				$("#afficheLogo2New").hide();
				$("#logo2").click(function(){
					$("#logo2New").trigger("click");
					$("#logo2").hide();
					$("#afficheLogo2New").show();
					
				});
				
				$("#logo2New").change(function(){
					var reader = new FileReader();
					
					reader.onload = function(e){
						$("#afficheLogo2New").attr("src",e.target.result);
					};
					
					reader.readAsDataURL(this.files[0]);
				});
				
				$("#afficheLogo3New").hide();
				$("#logo3").click(function(){
					$("#logo3New").trigger("click");
					$("#logo3").hide();
					$("#afficheLogo3New").show();
					
				});
				
				$("#logo3New").change(function(){
					var reader = new FileReader();
					
					reader.onload = function(e){
						$("#afficheLogo3New").attr("src",e.target.result);
					};
					
					reader.readAsDataURL(this.files[0]);
				});
				
				
				
					$("#notreDame").hide();
				$("#upload09898").click(function(){
					
					$("#image3").trigger("click");
					
					$("#leNom").hide();
					$("#leNom").hide();
					$("#upload09898").hide();
					$("#notreDame").show(500);
					
					
				});
				
				$("#image3").change(function(){
					var reader = new FileReader();
					
					reader.onload = function(e){
						$("#notreDame").attr("src","../image/icon.png");
						//$("#notreDame").attr("src",e.target.result);
					};
					
					reader.readAsDataURL(this.files[0]);
					//
				});
				
				
			});
			
		</script>
		
	</body>
</html>