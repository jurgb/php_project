<?php 

session_start();
include_once("class/tafelindeling.class.php");

		if(!empty($_POST))
		{
			if(isset($_POST['restaurant']))
			{

			$_SESSION['restaurant_id'] = $_POST['restaurant'];

			} else
			{
		
				$tafel = new Tafelindeling();

				$tafel->Tafelnr = $_POST['tafels'];
				$tafel->Aantalpersonen = $_POST['personen'];
		
				$tafel->Save();
				
			}	
		}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tafelindeling</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

	<script src="js/jquery.min.js"></script>
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Tafelindeling</h1>
		<?php include('timer.include.php') ?>	
		<div class="alert">Hier komen eventuele errors</div>
		<table>
			<tbody id="tabel_tafels">
				<tr>
					<th style="width: 10%;">Tafelnr</th>
					<th>Max aantal personen</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post">
					<td><input type="text" id="tafel_nr" name="tafels"></td>
					<td><input type="text" id="tafel_personen"  name="personen"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
					</form>
				</tr>

				<?php

				$tafel = new Tafelindeling();
				$all = $tafel->getAll();
				foreach($all as $a) { ?>
					<tr>
						<td><?= $a['tafelnr'] ?></td>				
						<td><?= $a['aantalpersonen']?></td>					
							<th class="nopadding white">		
							<a href="delete.php?type=tafel&amp;id=<?= $a['tafelnr'] ?>" class="delete" title="Verwijderen">Verwijderen</a>
							<a href="edit.php?type=tafel&amp;id=<?= $a['tafelnr'] ?>" class="edit" title="Bewerken">Bewerken</a>
						</th>			
					</tr>
				
 				<?php } ?>

			</tbody>
		</table>
	</section><!-- end content -->
	<script src="js/script_backend.js"></script>
	<script src="js/ajax_tafelindeling.js"></script>
</body>
</html>