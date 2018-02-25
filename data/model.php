<?php
function connectbdd(){
//Connection à la BDD à la maison
	$PARAM_hote='db'; // le chemin vers le serveur
	$PARAM_port='3306';
	$PARAM_nom_bd='CRAYON'; // le nom de votre base de données
	$PARAM_utilisateur='admin_bdd'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='lemdp@dm!n_bdd'; // mot de passe de l'utilisateur pour se connecter
	try
	{
		$pdo = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $pdo;
	}
	catch(Exception $e)
	{
        echo 'Echec lors de la connexion : ' . $e->getMessage();
		die();
	}
}

function finscription($nom,$prenom,$mail,$motdepasse,$indice,$pdo)
{
	try
	{

	$res = 1;

	//On vérifie que l'@ mail n'est pas déjà utilisée
	$reqmail="select mail from _utilisateurs";
	$reponsemail = $pdo->query($reqmail);
	while($donneemail = $reponsemail->fetch())
	{
		if($donneemail['mail'] == $mail)
		{
			$res = $res + 2;
			break;
		}
	}

	if($res==1)
	{
		$req1 = $pdo->prepare('INSERT INTO _utilisateurs(id,nom,prenom,mail,motdepasse,indice) VALUES (DEFAULT,:nom,:prenom,:mail,:motdepasse,:indice)');
		$req1->execute(array(
		'prenom' => $prenom,
		'nom' => $nom,
		'mail' => $mail,
		'motdepasse'=> $motdepasse,
		'indice' => $indice));
	}

	}
	catch(Exception $e)
	{
        //$err=$e->getMessage();
		//echo 'l erreur :'.$err;
        $res=0;
	}
        return $res;
}

function connexion($mail,$mdp,$pdo){
	try{
		$res = 0;
		$reqlogin="select count(*) from _utilisateurs where mail='$mail' AND motdepasse='$mdp'";
		$reponselogin = $pdo->query($reqlogin);
		$donneelogin = $reponselogin->fetch();
		$res = $donneelogin[0];
	}catch(Exception $e){
		//echo $e->getMessage();
		$res=2;
	}
	return $res;
}

function indice($mail,$pdo){
	try{
		$res = 0;
		$reqindice="select indice from _utilisateurs where mail='$mail'";
		$reponseindice = $pdo->query($reqindice);
		$donneeindice = $reponseindice->fetch();
		$res = $donneeindice[0];
	}catch(Exception $e){
		//echo $e->getMessage();
		$res=null;
	}
	return $res;
}
?>
