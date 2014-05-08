<?php
	session_start();
	include_once('class/reservaties.class.php');

	if(!isset($_SESSION['loggedin']))
	{
		header('Location: login.php');
	}else{

		try {
			if (!empty($_POST)) 
			{	
				if(isset($_POST['restaurant'])){
					$_SESSION['restaurant_id'] = $_POST['restaurant'];
				} else{
				$res = new Reservatie();

				$res->Name = $_POST['name'];
				$res->Table = $_POST['tafel'];
				$res->Date = $_POST['datum'];
				$res->Uur = $_POST['uur'];
				$res->Personen = $_POST['personen'];

				$res->save();
				}
			}

		} catch (Exception $e) {

				$alert= $e->getMessage();
		}
	}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservaties</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

	<script src="js/jquery.min.js"></script>
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Reservaties</h1>

		<table>

			<tbody>
				<div class="alert">Hier komen eventuele errors</div>
				<tr>
					<th style="width: 20%;">Naam</th>
					<th style="width: 3%;">Personen</th>
					<th style="width: 15%;">Datum</th>
					<th style="width: 10%;">Uur</th>
					<th>Tafelnr</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post">
					<td><input type="text" name="name"></td>
					<td><input type="text" name="personen"></td>
					<td><input type="text" name="datum" placeholder="dd-mm-jjjj"></td>
					<td><input type="text" name="uur"></td>
					<td><input type="text" name="tafel"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
				</form>
				</tr>


<?php

$res = new Reservatie();
$all = $res->getAll();

if($all){
	foreach($all as $a) { ?>
			<tr>
						<td><?= $a['klantnaam'] ?></td>				
						<td><?= $a['aantalpersonen']?></td>					
						<td><?= $a['datum'] ?></td>
						<td><?= $a['uur'] ?></td>
						<td><?= $a['tafelnr'] ?></td>	
							<th class="nopadding white">		
							<a href="delete.php?type=reservatie&amp;id=<?= $a['reservatieid'] ?>" class="delete" title="Verwijderen">Verwijderen</a>
							<a href="edit.php?type=reservatie&amp;id=<?= $a['reservatieid'] ?>" class="edit" title="Bewerken">Bewerken</a>
						</th>			
		</tr>
				
 <?php }
}

 ?>
			</tbody>
		</table>
	</section><!-- end content -->
	<script src="js/script_backend.js"></script>
</body>
</html>