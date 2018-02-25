<?php
session_start();
if(!isset($_SESSION['refcoadmin']))
{
	$_SESSION['refcoadmin']=0;
}
if($_SESSION['refcoadmin'] == 1){
	include('vues/adminheader.php');
	include('vues/admincontenu.php');
	include('vues/footer.php');
}else{
	include('vues/adminheader.php');
	include('vues/pasco.php');
	include('vues/footer.php');
}
?>

