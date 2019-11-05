<?php

session_start();
if(!empty($_SESSION)){
	$_SESSION['username_admin'];
}


include './classe/actionBDD.class.php';
include './classe/connexion.class.php';

	$con = new Connexion();
	$maCon = $con ->connexionBDD();
	
if(!empty($_POST)){
		//enregistrement de l'utilisateur
		if($_POST["ac"]==01){
			$nomUtilisateur = $_POST['nom'];
			$nomPays = $_POST['pays'];
			$emailUtilisateur = $_POST['email'];
			$monDePasse = $_POST['pwd'];
			$codeConfirmation = rand(1000, 9999);
				$enr = new AppBDD($maCon);
				$enr->enregistrementUtilisateur($nomUtilisateur, $nomPays, $emailUtilisateur, $monDePasse,$codeConfirmation);
			$subject="confirmation de compte";
			$message="voici votre code de confirmaition ".$codeConfirmation;
				mail($emailUtilisateur, $subject, $message);
		}
		}


		if($_POST["ac"] == 123 OR $_POST["ac"]== 103){
			$nom ="maman";
			 //$_POST['commentaire'];
			
			$text = $_POST['nomApplication'];
			echo $_POST['nomApplication'];
			$enregistreCommentaire = new AppBDD($maCon);
			$enregistreCommentaire->enregistreCommentaireProduit($nom,$text);
			
		}
		if($_POST['ac']==02){
			//la connexion de l'utilisateur au systeme
			$usr = $_POST['usrName'];
			$pwd = $_POST['pwdUsr'];
				$connexionUser = new AppBDD($maCon);
				$connexionUser->connexionUtilisateur($usr, $pwd);
		}
		if($_POST['ac']==03){
			//enregistrement de l'information du produit
			$nomApp = $_POST['nomApp'];
			$domaineApp = $_POST['domaineApp'];
			$versionApp= $_POST['versionApp'];
			$commentaireApp = $_POST['commentaireApp'];
			$usrnameApp = $_POST['email'];
			$emailUsr = $_SESSION['username_admin'];
			$sizeApp = $_FILES['imageApp']['size']/1000;
				$enregistrementInfo = new AppBDD($maCon);
				$enregistrementInfo ->enregistrementInfoApplication($nomApp, $domaineApp, $versionApp, $commentaireApp,$emailUsr,$sizeApp);
		}
		if($_POST['ac'] == 04){
			//confiramtion du compte utilisateur par le code via l'email
			$codeConfirmation = $_POST['code'];
				$confirmation = new AppBDD($maCon);
				$confirmation -> confirmation($codeConfirmation);
		}
		if($_POST['ac'] == 05){
			//afficher tous les logiciels
			$afficheToutApp = new AppBDD($maCon);
			$afficheToutApp -> afficherToutLogiciel();
		}
		if($_POST['ac'] == 06){
			//affiche le commentaire
			$nomApp = $_POST['nom'];
				$commentsApp = new AppBDD($maCon);
				$ech = $commentsApp -> affichecommentarire($nomApp);
				echo $ech;
		}
		if($_POST['ac']==15){
			//$nomApp = $_POST['nom'];
				$lesImages = new AppBDD($maCon);
				$lesImages -> lesImagesApp();
		}
		if($_POST['ac']== 28){
			$nomApp = $_POST['nomApp'];
				$like = new AppBDD($maCon);
				$like ->aimerApp($nomApp);
		}
		if($_POST['ac']==12){
			$lesDonnees = new AppBDD($maCon);
			$lesDonnees ->afficherToutLogiciel();
		}
		
		if($_POST['ac']== 25){
			//dislike
			$nomApp = $_POST['nomAp'];
				$dislike = new AppBDD($maCon);
				$dislike ->disLike($nomApp);
		}
		if($_POST['ac'] == 105){
			
			$nomApp = $_POST['nomApp'];
			$enreNom = new AppBDD($maCon);
			$enreNom -> ecricreLeNom($nomApp);
			
		}
		
		if($_POST['ac'] == 11){
			//recherche de l'application
			$nomApp = $_POST["entree"];
				$recherche = new AppBDD($maCon);
				$e = $recherche -> rechercheApp($nomApp);
				echo $e;
		}
		if($_POST['ac'] == 20){
			//lister les application selon l'utilisateur
			$emailUsr = $_SESSION['username_admin'];
				$liste = new AppBDD($maCon);
				$liste -> listeApp($emailUsr);
		}
		if(!empty($_SESSION) AND !empty($_FILES)){
			$emaiUsr =$_SESSION['username_admin'];
			$id = new AppBDD($maCon);
			$variable = $id -> recupererIdviaUsername();
			$lienImage = $id -> creationDossier($variable);
			$leDossier = $variable ;
			if(!empty($_FILES['logoNewNom'])){
		
				$fichier = $_FILES['logoNewNom']['error'];
				if($fichier == 0){
					$infosfichier = pathinfo($_FILES['logoNewNom']['name']);
					$id = 1;
		
					$extension_upload = $infosfichier['extension'];
					$extensions_autorisees = array('jpg','JPG', 'jpeg', 'gif','png');
					if (in_array($extension_upload, $extensions_autorisees)){
						$destination =$lienImage.basename($id.'.'.$extension_upload);
						move_uploaded_file($_FILES['logoNewNom']['tmp_name'],$destination);
						}
					}
			}
			if(!empty($_FILES['logo2NewNom'])){
				$fichier = $_FILES['logo2NewNom']['error'];
				if($fichier == 0){
					$infosfichier = pathinfo($_FILES['logo2NewNom']['name']);
					$extension_upload = $infosfichier['extension'];
					$id = 2;
					$extensions_autorisees = array('jpg','JPG', 'jpeg', 'gif','png');
				if (in_array($extension_upload, $extensions_autorisees)){
					$destination =$lienImage.basename($id.'.'.$extension_upload);
						move_uploaded_file($_FILES['logo2NewNom']['tmp_name'], $destination);
						}
					}
				}
			if(!empty($_FILES['logo3NewNom'])){
				$fichier = $_FILES['logo3NewNom']['error'];
			if($fichier == 0){
				$infosfichier = pathinfo($_FILES['logo3NewNom']['name']);
				$extension_upload = $infosfichier['extension'];
				$id = 3;
					$extensions_autorisees = array('jpg','JPG', 'jpeg', 'gif','png');
						if (in_array($extension_upload, $extensions_autorisees)){
							$destination =$lienImage.basename($id.'.'.$extension_upload);
							move_uploaded_file($_FILES['logo3NewNom']['tmp_name'], $destination);
						}
					}
				}
			if(!empty($_FILES['imageApp'])){
				$fichier = $_FILES['imageApp']['error'];
					if($fichier == 0){
						$infosfichier = pathinfo($_FILES['imageApp']['name']);
						$extension_upload = $infosfichier['extension'];
						$id = App;
						$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','apk');
							if (in_array($extension_upload, $extensions_autorisees)){
									$destination =$lienImage.basename($id.'.'.$extension_upload);
									move_uploaded_file($_FILES['imageApp']['tmp_name'], $destination);
									}
								}
						}	
	
			
	}
	
	
	
