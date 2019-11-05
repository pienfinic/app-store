<?php
session_start();
if(!empty($_GET)){
	$_SESSION['username_admin'] = $_GET['admin'];
}
  

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Application</title>
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
			li:hover{
				
				background-color:lavender;
			}
			#logo{
				font-size:1cm;
				color:#d7d7d7;
			}
			#zoneCommentaire{
				margin-left:670px;
				background-color:red;
				margin-top:-200px;
			}
			#imageN1:hover{
				optacity:0.7;
			}
			.modal{
				display:none;
				position: fixed;
				z-index: 1;
				left:0;
				top:0;
				width:100%;
				height:100%;
				overflow:auto;
				background-color:rgb(0,0,0);
				background-color:rgba(0,0,0,0.9);
			}
			.modal-content{
				margin:auto;
				display:block;
				width:80%;
				max-width:700px;
			}
			#caption{
				margin:auto;
				display:block;
				width:80%;
				max-width: 700px;
				text-align:center;
				color:#ccc;
				padding:10px 0;
				height:150px;
			}
			.modal-content,#caption{
				animation-name:zoom;
				animation-duration:o.6;
				
			}
			@keyframes zoom{
				from{
					transform: scale(0)
				}
				to{
					transform: scale(1)
				}
			}
			.close{
				position: absolute;
				top:15px;
				right: 35px;
				color:#f1f1f1;
				font-weight:bold;
				transition:0.3s;
			}
			.close:hover,
			.close:focus{
				color: #bbb;
				text-decoration:none;
				cursor: pointer;
			}
			@media only sreen and(@media-wdth:700px){
				.modal-content{
					width:100%;
				}
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
							<a href="#">About</a>
						</li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="login.php"><span class="glyphicon glyphicon-user"><?php
							if(!empty($_SESSION)){
								echo $_SESSION['username_admin'] ; 
							}
							 
							 
							 ?></span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid text-left">
			<div class="row">
				<button type='button' class='btn btn-success btn-block'></button>
				<div id="zoneMenu" class="col-sm-6"><br />
					<form action="../containeur.php" method="post" enctype="multipart/form-data">
						<input hidden type="text" name="ac" value="11" />
						<div class="input-group">
							
							<input type="text" id="inputSearch" name="recherche" class="form-control" placeholder="Search" />
							<div class="input-group-btn">
								<button style="color: green" class="btn btn-default" id="serch" type="button"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
					<br />
						<ul class="list-group">
							<div id="app">
							
							</div>
							
						</ul>
					
				</div>
				
				<div id="zoneDownload" class="col-md-6" style="background-color:">
					<div  id="afficherLording">
							<p style="font-family:Arial; font-size:20px;">Download this app in the android phone to find easely your app</p>
							<p style="font-family:Arial; font-size:20px;">Fast to get your app <span id="appMobile" style="color: red;">Download</span></p>
							<div style="text-align: center;">
								<img style="margin-left:130px;" src="../image/merci.png" />
							</div>
					</div>
					<br />
					<div hidden id="afficheIn">
						<div id="nomApp"></div>
						<br />
							<center><img id="imageN1" alt="image principale" src ="" width="200" height="150" />	
							<img id="imageN2" src ="" width="200" height="150" />
							<img id="imageN3" src ="" width="200" height="150" /></center>
								 <div id="myModal" class="modal">
								 	<span class="close">Close</span>
								 	<img class="modal-content" id="img01" />
								 	<div id="caption"></div>
								 </div>
							
							
							<div id="afficheCommentaire"></div>
							<br />
							<p>
								<button style="color: white; width:100px;" class="btn btn-success" id="download1" type="button"><div id="lienApp2" ><a href="#"></div><i class="glyphicon glyphicon-download"></i><div id="poids"></div></a></button>      
								 <button id="like" style="color: white; width:100px;" class="btn btn-success" type="submit"><i  class="glyphicon glyphicon-thumbs-up"></i><div id="zoneLike"></div></button> 
								 <button id="dislike" style="color: white; width:100px;" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-thumbs-down"></i><div id="zoneDislike"></div></button>
								
								   </p>
							
								    <label for="comment">Comment</label>
								 	<textarea class="form-control" rows="4" id="valeurCommentaire" name="text"></textarea>
								 	
								 	<button id="publierCommentaire" class="btn btn-success" type="submit">publier</button>
								 	<br />
								 	
						
					</div>
					
				</div>
				
				<div style="margin-top: 25px;" hidden id="zoneCommentaireBase" class="col-md-3" style="background-color:">
					<span style="font-family: Arial;border-bottom:2px solid green; text-align: center; font-size: 20px; margin-top:10px;">le commentaire sur l'application</span>
					<i><div style="padding:5px; text-align: center;" id="commentairePublier">
						
					</div></i>
				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
		
		
			<script type="text/javascript">
			
				$(document).ready(function(){
						
						$.post("../containeur.php" ,{"ac":05},function(info){
							 info = eval(info);
							 var text = "";
							 for(var i = 0; i<info.length ;i++){
							 	text += "<li id='une' class='list-group-item'>" + info[i].nom + "</li>";
							 }
							 $("#app").append(text);
						});
		
							
						//$("#une").click(function(){
							//var nomA =  $(event.target).text();
						//}
						$("#publierCommentaire").click(function(){
							var essaie = $("#envoyerInfo").val() ;
							var commentaire = $("#valeurCommentaire").val();
							$.post("../containeur.php",{
								"ac":103,
								"idCommentaire":essaie,
								"text":commentaire
								
							},function(data){
								alert("==> "+data)
							});
						});
						
						function detailApp(){
							$(this).click(function(){
					var usersid =  $(event.target).text();
					$("#une").click(function(){
						
						$.post("../containeur.php",{"ac":105,"nomApp":usersid},function(off){
					});
					});
					
						loader(usersid);
						
						$("#like").click(function(){
								$.post("../containeur.php",{"ac":28,"nomApp":usersid},function(like){
										loader(usersid);
								});	
						});
						$("#appMobile").mouseover(function(){
							alert("merci mon Dieu");
						});
						$("#dislike").click(function(){
								$.post("../containeur.php",{"ac":25,"nomAp":usersid},function(dislike){
										loader(usersid);
								});
						});
						
						$.post("../containeur.php" ,{"ac":06,"nom":usersid},function(arrivee){
							$("#afficheCommentaire").html(arrivee);
						});
						//alert(usersid);
						$("#afficheIn").show();
						$("#afficherLording").hide();
						$("#zoneCommentaireBase").show();
						$("#zoneDownload").removeClass("col-md-6").addClass("col-md-6");
   						$("#zoneMenu").removeClass("col-sm-5").addClass("col-md-3");
						$("#nomApp").html('<button style="font-size:25px; color:green;" type="button" id="envoyerInfo" class="btn btn-default btn-block">' +usersid+ '</button>');
						
							$.post("../containeur.php",{
							"ac":123,
							"nomApplication":usersid
						},function(trouver){
						});
						
							
						
						});
							
					}
					detailApp();
						function loader(nomApp){
							$.post("../containeur.php" ,{"ac":15},function(id){
										id = eval(id);
											$.post("../containeur.php" ,{"ac":12},function(nomsAppDase){
												nomsAppDase = eval(nomsAppDase);
											 for(var i = 0; i<nomsAppDase.length ;i++){
							 						 if(nomApp == nomsAppDase[i].nom){
							 						 	var une ="1.jpg",deux ="2.jpg", trois ="3.jpg";
							 						 	var lien = id[0].image1;
							 						 	var feld = lien.split("/");
							 						 	var img1 = feld[0]+"/"+feld[1]+"/"+nomsAppDase[i].id+"/"+une;
							 						 	var img2 = feld[0]+"/"+feld[1]+"/"+nomsAppDase[i].id+"/"+deux;
							 						 	var img3 = feld[0]+"/"+feld[1]+"/"+nomsAppDase[i].id+"/"+trois;
							 						 	
							 						 	$("#download1").click(function(){
																 for(var i = 0; i<nomsAppDase.length ;i++){
																 	if(nomApp == nomsAppDase[i].nom){
																 		window.location.href = "../imageUpload/"+nomsAppDase[i].id+"/App.apk";
																 	}
																 }
																//window.location.href = "../imageUpload/"+nomsAppDase[0].id+"/App.apk";
															});
							 						 		$("#imageN1").attr("src",img1);
															$("#imageN2").attr("src",img2);
															$("#imageN3").attr("src",img3);
															$("#poids").html(nomsAppDase[i].size+" ko");
															$("#zoneLike").html("("+nomsAppDase[i].likeP+")");
															$("#zoneDislike").html(""+nomsAppDase[i].dislikeP+"");
															$("#commentairePublier").html(""+nomsAppDase[i].commet+"");
															
															
							 							};
													};
												});
											});		
								};	
					
						
						
						
						
						
					});
					$("#serch").click(function(){
   						var inputN = $("#inputSearch").val();
   							$.post("../containeur.php" ,{
   								"entree":inputN,
   								"ac":11
   								},function(data){
   								 data = eval(data);
   								if(data[0].nom == inputN ){
   									$("#app").html("<li id='une' class='list-group-item'>"+data[0].nom);
   									$("#zoneDownload").removeClass("col-md-6").addClass("col-md-9");
   									$("#zoneMenu").removeClass("col-sm-5").addClass("col-md-3");
   								}else{
   									$("#app").html("<li id='une' class='list-group-item'>Not found</li>");
   								};
   								
   								 	});
					});
					
				
			</script>
	</body>
</html>