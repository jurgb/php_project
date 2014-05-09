<?php

	//Process ajax call
	include_once('../class/menu.class.php');
	$menu = new Menu();
	session_start();
	
	//controleer of er een update wordt verzonden
	if(!empty($_POST['gerecht']))
	{
		if(isset($_POST['restaurant'])){
				$_SESSION['restaurant_id'] = $_POST['restaurant'];
		} else{
			$menu->Gerecht = $_POST['gerecht'];
			$menu->Prijs = $_POST['prijs'];
			$menu->Type = $_POST['type'];

			$menu->save();
		}
	}
	
	$result = $menu->getAll();
	$feedback['menu'] = array();

	// LOOP OVER ALL RECORDS AND PUT THEM IN AN ARRAY
	while($row = $result->fetch_array())
	{
		$feedback['menu'] = $row;
	}
	echo json_encode($feedback);

?>