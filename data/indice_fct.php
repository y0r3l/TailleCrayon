<?php
include('model.php');
if(isset($_POST['mail'])){
	if(!empty($_POST['mail']))
	{
		$mail = htmlspecialchars($_POST['mail']);
				
		$pdo = connectbdd();
		$refindice = indice($mail,$pdo);
		
		if(!empty($refindice)){
				$_SESSION['refindice'] = 1;
		}else{
				$_SESSION['refindice'] = 0;
		}
	}else if(empty($_POST['mail'])){
		//si la connexion a échoué car mail non rempli
		$_SESSION['refindice']=2;
	}
}else{
	$_SESSION['champs']=1;
}

?>
