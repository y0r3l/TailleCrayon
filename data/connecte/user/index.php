<?php
session_start();
if($_SESSION['refcouser'] == 1){
	include('vues/userheader.php');
	include('vues/usercontenu.php');
	include('vues/footer.php');
}else{
	include('vues/userheader.php');
	include('vues/pasco.php');
	include('vues/footer.php');
}
?>

