<?php 

session_start();
include_once("class/menu.class.php");

		if(!empty($_POST))
		{
			if(isset($_POST['restaurant'])){
					$_SESSION['restaurant_id'] = $_POST['restaurant'];
			} else{
				
				$menu = new Menu();
				$menu->Gerecht = $_POST['gerecht'];
				$menu->Prijs = $_POST['prijs'];
				$menu->Type = $_POST['type'];
				$menu->Save();
				
			}
		}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

	<script src="js/jquery.min.js"></script>
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Menu</h1>
		<?php include('timer.include.php') ?>
		<?php 
			if(isset($alert)){
				echo "<div class='alert'>" . $alert . "</div>";
			}
		?>
		<table id="tabel_menu">
			<tbody>
				<tr>
					<th style="width: 60%;">Gerecht</th>
					<th style="width: 10%;">Prijs (€)</th>
					<th>Type</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post">
					<td><input type="text" id="menu_gerecht" name="gerecht"></td>
					<td><input type="text" id="menu_prijs" name="prijs"></td>
					<td><input type="text" id="menu_type" name="type"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
					</form>
				</tr>

				<?php

				$menu = new Menu();
				$all = $menu->getAll();
				foreach($all as $a) { ?>
					<tr>
						<td><?= $a['gerechtnaam'] ?></td>				
						<td>€ <?= $a['gerechtprijs']?></td>					
						<td><?= $a['gerechttype'] ?></td>	
						<th class="nopadding white">		
						<a href="delete.php?type=menu&amp;id=<?= $a['gerecht_id'] ?>" class="delete" title="Verwijderen">Verwijderen</a>
						<a href="edit.php?type=menu&amp;id=<?= $a['gerecht_id'] ?>" class="edit" title="Bewerken">Bewerken</a>
						</th>			
					</tr>
								
				 <?php } ?>
				
				
				
			</tbody>
		</table>
	</section><!-- end content -->
	<script src="js/script_backend.js"></script>
	<script src="js/ajax_menu.js"></script>
</body>
</html>
