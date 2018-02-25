<?php
session_start();
if(!isset($_SESSION['champs']))
{
	$_SESSION['champs']=0;
}
if(!isset($_SESSION['refco']))
{
	$_SESSION['refco']=6;
}
if($_SESSION['refco']==1)
{
	$_SESSION['refco']=6;
}
include('connexion_fct.php');

include('vues/header.php');
		if($_SESSION['refco']!=6)
		{
			if($_SESSION['refco']==2)
			{
				//si la connexion a échoué à cause d'une erreur inexpliquée
				include('vues/cofail.php');
				$_SESSION['refco']=6;
			}
			else if($_SESSION['refco']==0)
			{
				//si la connexion a échoué car mauvais identifiant
				include('vues/idmdpfail.php');
				$_SESSION['refco']=6;
			}
			else if($_SESSION['refco']==3)
			{
				//si la connexion a échoué car mdp non rempli
				include('vues/mdpfail.php');
				$_SESSION['refco']=6;
			}else if($_SESSION['refco']==4)
			{
				//si la connexion a échoué car mail non rempli
				include('vues/idfail.php');
				$_SESSION['refco']=6;
			}
			else if($_SESSION['refco']==5)
			{
				//si aucun des champs remplis
				include('vues/champsmanquant.php');
				$_SESSION['refco']=6;
			}
			include('vues/contenuCo.php');	
		}
		else
		{
			if($_SESSION['champs']==1)
			{
				include('vues/champsmanquant.php');
			}
			include('vues/contenuCo.php');
		}
include('vues/footer.php');
?>
