<?php
include './classe/actionBDD.class.php';
include './classe/connexion.class.php';

	$con = new Connexion();
	$maCon = $con ->connexionBDD();
	

if(!empty($_POST)){
	if($_POST['ac'] == 101){
		$usr = $_POST['entree'];
		$verficationUsr = new AppBDD($maCon);
		$verficationUsr -> verificationUsename($usr);
	}
	if($_POST["ac"] == 102){
		$nom = $_POST["noms"];
		$verificationNom = new AppBDD($maCon);
		$verificationNom -> verificationNom($nom);
		
	}
}

	
