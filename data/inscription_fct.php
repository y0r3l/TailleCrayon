<?php 
$pdo = connectbdd();

if(!empty($_POST['nom']) AND !empty($_POST['prenom'])AND !empty($_POST['mail'])AND !empty($_POST['mdp'])AND !empty($_POST['indice'])){
		if((strlen($_POST['nom'])>60)or(strlen($_POST['prenom'])>60)or(strlen($_POST['mail'])>60)or(strlen($_POST['indice'])>140))
		{
			//On vérifie la taille 
			$_SESSION['resinscri'] = 4;
		}else{
			//Si la taille est bonne
			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$mail = htmlspecialchars($_POST['mail']);
			$mdp = htmlspecialchars($_POST['mdp']);
			$indice = htmlspecialchars($_POST['indice']);
		
			//On hash le mdp
			$mdp = hash('sha512',$mdp);
		
			//Appel de la fonction dans le modele
			$resfinscri = finscription($nom,$prenom,$mail,$mdp,$indice,$pdo);
		
			//Si l'inscritption dans la BDD est réussie
			if ($resfinscri == 1){
				$_SESSION['resinscri'] = 1;
			} elseif($resfinscri == 0){
			//Si l'inscription dans la BDD a échoué
				$_SESSION['resinscri'] = 0;
			} elseif($resfinscri == 3){
			//Si le mail est deja utilisé
				$_SESSION['resinscri'] = 3;
			}
			//header('Location : ../inscription.php');
		}
}
else{
	$_SESSION['champs']=1;
}
?>
