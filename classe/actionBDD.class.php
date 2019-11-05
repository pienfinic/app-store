<?php
	
	class AppBDD{
		
		private $conBDD ;
		public function __construct($connexion){
			$this->conBDD = $connexion;
		}
		
		public function enregistrementUtilisateur($nomUtilisateur,$pays,$email,$motdePasse,$code){
			try{
			$req = $this -> conBDD -> prepare("INSERT INTO utilisateur (id_utilisateur,noms_utilisateur,pays_utilisateur,email_utilisateur,monDePasse_utilisateur,code_confirmation) VALUES ('',?,?,?,?,?)");
			$req -> execute(array($nomUtilisateur,$pays,$email,$motdePasse,$code));
			
			}catch(exception $er){
				echo "erreur ici".$er->getMessage();
			}
		}
		
		public function enregistreCommentaireProduit($idProduit,$textCommentaire){
			try{
				$req = $this->conBDD -> prepare("INSERT INTO commetaireProduit(id_commentaire,id_infoProduit,text_commentaireProduit) VALUES ('',?,?)");
				$req -> execute(array($idProduit,$textCommentaire));
			}catch(exception $er){
				echo "erreur lors de commentaire".$er->getMessage();
			}
			}
		public function ecricreLeNom($nomApplication){
			$monfichier = fopen('compteur.txt', 'w');
			fwrite($monfichier, $nomApplication);
			fclose($monfichier);
		}	
		
		public function lireLeNom(){
			$monfichier = fopen('compteur.txt', 'r+');
			$ligne = fgets($monfichier);
			fclose($monfichier);
			return $ligne;
		}
		
		
		
		
		public function aimerApp($id){
			try{
				$nvprix =1;
				$req = $this->conBDD -> prepare("UPDATE infoProduit SET like_produit =like_produit + :nmb WHERE nom_produit = :id ");
				$req->execute(array(
					'nmb' => $nvprix,
					'id'=>$id
				));
			}catch(exception $er){
				echo "probleme ".$er-> getMessage();
			}
		}
		public function disLike($id){
			try{
				$nvprix =1;
				$req = $this->conBDD -> prepare("UPDATE infoProduit SET dislike_produit =dislike_produit+:nmb WHERE nom_produit = :id ");
				$req->execute(array(
					'nmb' => $nvprix,
					'id'=>$id
				));
			}catch(exception $er){
				echo "probleme ".$er-> getMessage();
			}
		}
		
		public function affichecommentarire($nomApp){
			try{
				$req = $this -> conBDD -> prepare("SELECT * FROM infoProduit WHERE nom_produit = ?");
				$req -> execute(array($nomApp));
					if($donnees = $req -> fetch()){
						return $donnees['commentaire_produit'];
					}
			
			}catch(exception $e){
				echo "le commentaire ".$e->getMessage();
			}
		}
		
		public function enregistrementInfoApplication($nomApp,$domaindeApp,$versionApp,$commentaireApp,$emailProduit,$sizeProduit){
			try{
				$req = $this -> conBDD -> prepare("INSERT INTO infoProduit(id_produit,nom_produit,domaine_produit,version_produit,commentaire_produit,email_produit,size_produit) VALUES ('',?,?,?,?,?,?)");
				$req -> execute(array($nomApp,$domaindeApp,$versionApp,$commentaireApp,$emailProduit,$sizeProduit));
				header("Location:App/administration.php");
			}catch(exception $err){
				echo "erreur ici pour le produit ".$err->getMessage();
			}
			
		}
		
		public function connexionUtilisateur($userName,$passWord){
			try{
				
				$req = $this -> conBDD -> prepare("SELECT * FROM utilisateur WHERE email_utilisateur = ? AND monDePasse_utilisateur = ?");
				$req -> execute(array($userName,$passWord));
					if($donnees=$req -> fetch()){
						$usrname = $donnees['email_utilisateur'];
						header('Location:App/administration.php?admin='.$usrname);
					}else{
						header('Location:App/login.php?err=oui');
					}
				
			}catch(exception $con){
				echo "erreur de la connexion ".$con->getMessage();
			}	
				
		}
		
		public function afficherToutLogiciel(){
			try{
				$req = $this -> conBDD-> prepare("SELECT * FROM infoProduit");
				$req -> execute();
				$tab = array();
					while ($donnees = $req->fetch()){
						$tab[] = array("nom" => $donnees['nom_produit'],"id" => $donnees['id_produit'],"size" => $donnees['size_produit'],"commet" => $donnees['commentaire_produit'], "likeP" => $donnees['like_produit'],"dislikeP" => $donnees['dislike_produit']) ;
							
					}
					echo json_encode($tab);
			}catch(execption $c){
				echo "les logiciel ".$c->getMessage();
			}
		}
		
		public function verificationImage(){
			
			$codeErreur = $_FILES['maPhoto']['error'];
			 if($codeErreur == UPLOAD_ERR_OK){
				
				$fichier = $_FILES['maPhoto'];
				copy ($fichier['tmp_name'] , "/home/angemito/Pictures/" ) ;
			}
			
		}
		
		public function verificationUsename($userName){
			$req = $this -> conBDD -> prepare("SELECT * FROM utilisateur WHERE email_utilisateur = ?");
			$req -> execute(array($userName));
				$donnees = $req -> fetch();
			if(!empty($donnees)){
				echo "1";
			}
			
		}
		
		public function verificationNom($nom){
			$req = $this -> conBDD ->prepare("SELECT * FROM utilisateur WHERE noms_utilisateur =?");
			$req -> execute(array($nom));
				$donnees = $req ->fetch();
				if(!empty($donnees)){
					echo "2";
				}
		}
		
		public function confirmation($code){
			$req = $this -> conBDD ->prepare("SELECT * FROM utilisateur WHERE code_confirmation=?");
			$req -> execute(array($code));
				$conf=array();
					while ($donnees = $req->fetch()){
						$conf[] = array("code" => $donnees['code_confirmation'],"email" => $donnees['email_utilisateur']) ;
					}
				echo json_encode($conf);
		}
		
		/*public function recupererIdviaUsername($username){
			$req = $this -> conBDD -> prepare("SELECT * FROM infoProduit  WHERE email_produit = ? ORDER BY id_produit DESC LIMIT 1,1");
			$req -> execute(array($username));
			$donnees = $req -> fetch();
			while ($donnees){
				return $donnees['id_produit'];
			}
			
		}*/
		
		
		public function recupererIdviaUsername(){
			$req = $this -> conBDD -> query("SELECT id_produit FROM infoProduit ORDER BY id_produit DESC LIMIT 1");
			$donnees = $req -> fetch();
			while ($donnees){
				return $donnees['id_produit'];
			}
			
		}
		
		
		public function creationDossier($Id){
			$id = $Id;
			mkdir("/usr/local/ampps/www/workSpace/store/imageUpload/".$id,0777,TRUE);
			chmod("/usr/local/ampps/www/workSpace/store/imageUpload/".$id, 0777);
			$lien = "/usr/local/ampps/www/workSpace/store/imageUpload/".$id.'/';
				return $lien;
			
		}
		
		
		public function rechercheApp($nomApplication){
			$req = $this -> conBDD -> prepare("SELECT * FROM infoProduit WHERE nom_produit = ?");
			$req -> execute(array($nomApplication));
				$donnees = $req -> fetch();
				if($donnees){
					
					echo "[{'nom':'".$donnees['nom_produit']."','id':'". $donnees['id_produit'] ."'}]" ;
				}else{
					echo "[{'nom':'".$donnees['nom_produit']."','id':'". $donnees['id_produit'] ."'}]" ;
				}
				
				
		}
		public function listeApp($usename){
			$req = $this -> conBDD-> prepare("SELECT * FROM infoProduit WHERE email_produit = ? ");
			$req -> execute(array($usename));
				$tableau = array();
					while ($donnees = $req->fetch()){
						$tableau[] = array("app" => $donnees['nom_produit']);
					}
					echo json_encode($tableau);
		}
		public function rechercheId($username){
			try{
				$req = $this -> conBDD -> prepare("SELECT * FROM infoProduit WHERE nom_produit = ?");
			$req -> execute(array($nomApplication));
				$donnees = $req -> fetch();
				if($donnees){
					
					echo "[{'nom':'".$donnees['nom_produit']."','id':'". $donnees['id_produit'] ."'}]" ;
				}else{
					echo "[{'nom':'".$donnees['nom_produit']."','id':'". $donnees['id_produit'] ."'}]" ;
				}
			}catch(exception $rr){
				echo "on ne trouve pas id ".$rr->getMassage();
			}
			
		}
		public function envoiMailUtilisateur($to,$subject,$message,$header){
			mail($to, $subject, $message,$header,$header);
			
		}
		public function lesImagesApp(){
			$lienImage = opendir("./imageUpload/");
				$tab = array();
				while($fichier = readdir($lienImage)){
					if(preg_match("/.jpg/", $fichier)){
						
						$tab[] = array("image1" => '../imageUpload/'.$fichier) ;
					}
				}
					
					echo json_encode($tab);
					
		}
		public function afficheLesInfos(){
			
		}
	}
