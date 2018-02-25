<?php
session_start();
if(!isset($_SESSION['champs']))
{
	$_SESSION['champs']=0;
}
if(!isset($_SESSION['refindice']))
{
	$_SESSION['refindice']=3;
}
include('indice_fct.php');

include('vues/header.php');
		if($_SESSION['refindice']!=3)
		{
			if($_SESSION['refindice']==0)
			{
				//si la recherche d'erreur n'est pas fructueuse
				include('vues/indicefail.php');
				$_SESSION['refindice']=3;
			}
			else if($_SESSION['refindice']==1)
			{
				//si la recherche est fructueuse
				include('vues/indicereussi.php');
				$_SESSION['refindice']=3;
			}
			else if($_SESSION['refindice']==2)
			{
				//si la recherche a échoué car pas de mail fourni
				include('vues/idfail.php');
				$_SESSION['refindice']=3;
			}
			include('vues/contenuindice.php');	
		}
		else
		{
			if($_SESSION['champs']==1)
			{
				include('vues/champsmanquant.php');
			}
			include('vues/contenuindice.php');
		}
include('vues/footer.php');
?>
