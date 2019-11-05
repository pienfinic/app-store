<?php
class Connexion{
	public function connexionBDD(){
	try{
			 $nomServeur='localhost';
			 $nomUtilisateur = 'root';
			 $pwdUtilisateur = 'mysql';
			 $nomBDD ='store';			
				$con[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$bdd = new PDO("mysql:host=$nomServeur;dbname=$nomBDD", $nomUtilisateur, $pwdUtilisateur,$con);
				return $bdd;
		 	}catch(PDOException $err){
		 		echo'voici le probleme '. $err->getMessage();
		 	}
	}
}