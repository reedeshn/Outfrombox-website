<?php 

	//MySQL connection
	require('../database/dbjoin.php');

	// Fetch product class
	require('../database/fetchpro.php');

	// dbjoin Object
	$db = new dbjoin();

	//Product object
	$product = new fetchpro($db);


	if(isset($_POST['itemid']))
	{
		$result = $product->getProduct($_POST['itemid']);
		echo json_encode($result);
	}







?>