<?php

	//Process ajax call
include_once('../class/reservaties.class.php');
include_once('../class/tafelindeling.class.php');
$tafel = new Tafelindeling();
$res = new Reservatie();
	session_start();
	$feedback['error'] = array();
	if ($tafel->Check($_POST['tafel']) == "exists") {
		//controleer of er een update wordt verzonden
		if(!empty($_POST['name']))
		{
			if(isset($_POST['restaurant'])){
					$_SESSION['restaurant_id'] = $_POST['restaurant'];
			} else{
				$res->Name = $_POST['name'];
				$res->Table = $_POST['tafel'];
				$res->Date = $_POST['datum'];
				$res->Uur = $_POST['uur'];
				$res->Personen = $_POST['personen'];

				$res->save();
			}
		}

		

			$result = $res->getAll();
			$feedback['reservaties'] = array();

			// LOOP OVER ALL RECORDS AND PUT THEM IN AN ARRAY
			while($row = $result->fetch_array())
			{
				$feedback['reservaties'] = $row;
			}

		// return array
		echo json_encode($feedback);
	}
	else
	{
		$feedback['error'] = "table doesnt exist";
		echo json_encode($feedback);
	}
?>