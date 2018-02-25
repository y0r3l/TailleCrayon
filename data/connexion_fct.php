<?php
include('model.php');
if(isset($_POST['mail']) AND isset($_POST['mdp'])){
			if(!empty($_POST['mail']) AND !empty($_POST['mdp']))
			{
				$mail = htmlspecialchars($_POST['mail']);
				$mdp = htmlspecialchars($_POST['mdp']);
				
				$pdo = connectbdd();
				$mdp = hash('sha512',$_POST['mdp']);
				$refco = connexion($mail,$mdp,$pdo);
		
				if($refco == 1){
					$_SESSION['refco'] = 1;
					if($mail!='harold.malcuit@gmail.com'){
						$_SESSION['refcouser'] = 1;
						$_SESSION['refcoadmin'] = 0;
						header('Location:./connecte/user/index.php');
						exit();
					}else{
						$_SESSION['refcoadmin'] = 1;
						$_SESSION['refcouser'] = 0;
						header('Location:./connecte/admin/index.php');
						exit();
					}
				}else if($refco == 2){
					$_SESSION['refco']=2;
				}else if($refco == 0){
					$_SESSION['refco']=0;
				}
				
			}else if(empty($_POST['mdp']) AND !empty($_POST['mail']))
			{
				//si la connexion a échoué car mdp non rempli
				$_SESSION['refco']=3;
			}else if(empty($_POST['mail']) AND !empty($_POST['mdp']))
			{
				//si la connexion a échoué car mail non rempli
				$_SESSION['refco']=4;
			}
			else
			{
				//si aucun des champs remplis
				$_SESSION['refco']=5;
			}
}else{
	$_SESSION['champs']=1;
}

?>
