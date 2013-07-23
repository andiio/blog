<?php 

	include_once('resources/init.php'); 

if ( ! isset($_GET['id']) ) {
	header('location: index.php');
	die();
}

delete('posts', $_GET['id']);

header('location: index.php');
die();

?>