<?php
session_start();

if(!isset($_SESSION['resinscri']))
{
	$_SESSION['resinscri']=2;
}
if(!isset($_SESSION['champs']))
{
	$_SESSION['champs']=0;
}

include('model.php');
include('inscription_fct.php');

include('vues/header.php');
		
		if($_SESSION['resinscri'] != 2)
		{
			if($_SESSION['resinscri'] == 1)
			{
				//si l'inscription a réussie
				include('vues/inscrireussie.php');
				$_SESSION['resinscri']=2;
			}else if($_SESSION['resinscri'] == 0)
			{
				//si l'inscritpion a échouée à cause d'une erreur inexpliquée
				include('vues/inscrifail.php');
				include('vues/contenuinscri.php');
				$_SESSION['resinscri']=2;
			}else if($_SESSION['resinscri'] == 3)
			{
				//si l'inscritpion a échouée car l'@ mail est déjà utilisée
				include('vues/mailfail.php');
				include('vues/contenuinscri.php');
				$_SESSION['resinscri']=2;
			}else if($_SESSION['resinscri'] == 4)
			{
				//si l'inscritpion a échouée car l'@ mail est déjà utilisée
				include('vues/longueurfail.php');
				include('vues/contenuinscri.php');
				$_SESSION['resinscri']=2;
			}
		}
		else
		{
			if($_SESSION['champs']==1)
			{
				include('vues/champsmanquant.php');
			}
			include('vues/contenuinscri.php');
		}
include('vues/footer.php');
?>

