<?php

	include 'actionBDD.class.php';
	include 'connexion.class.php';
	
		$con = new Connexion();
		$maCon = $con ->connexionBDD();
		
			$test = new AppBDD($maCon);
			$test -> creationTest(10);
			echo $test;
