<?php

	//Process ajax call
include_once('../class/tafelindeling.class.php');
$tafel = new Tafelindeling();
	session_start();
	
	//controleer of er een update wordt verzonden
	if(!empty($_POST['tafel']))
	{
		if(isset($_POST['restaurant'])){
				$_SESSION['restaurant_id'] = $_POST['restaurant'];
		} else{
			$tafel->Tafelnr = $_POST['tafel'];
			$tafel->Aantalpersonen = $_POST['personen'];

			$tafel->save();
		}
	}

	

		$result = $tafel->getAll();
		$feedback['tafels'] = array();

		// LOOP OVER ALL RECORDS AND PUT THEM IN AN ARRAY
		while($row = $result->fetch_array())
		{
			$feedback['tafels'] = $row;
		}

	// return array
	echo json_encode($feedback);
?>