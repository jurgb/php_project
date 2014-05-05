<?php 

session_start();

if(!empty($_POST)){
	if(isset($_POST['restaurant'])){
		$_SESSION['restaurant_id'] = $_POST['restaurant'];
	} else{

		if($_GET['type'] == 'reservatie'){
			include_once('class/reservaties.class.php');
			$res = new Reservatie();

				$res->Name = $_POST['name'];
				$res->Table = $_POST['tafel'];
				$res->Date = $_POST['datum'];
				$res->Uur = $_POST['uur'];
				$res->Personen = $_POST['personen'];
				$res->Update();

				header('Location: reservaties.php');

		} elseif($_GET['type'] == 'tafel'){
			include_once('class/tafelindeling.class.php');

				$tafel = new Tafelindeling();
				$tafel->Tafelnr = $_POST['tafels'];
				$tafel->Aantalpersonen = $_POST['personen'];
				$tafel->Update();

				header('Location: tafelindeling.php');

		} elseif($_GET['type'] == 'menu'){
			include_once('class/menu.class.php');

				$menu = new Menu();
				$menu->Gerecht = $_POST['gerechtnaam'];
				$menu->Prijs = $_POST['prijs'];
				$menu->Type = $_POST['type'];
				$menu->Update();

				header('Location: menu.php');
		}
		
	}
}


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bewerken</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Bewerken</h1>

		<?php //----Reservatie bewerken----
			if(!empty($_GET) && $_GET['type'] == 'reservatie'){ 
			include_once('class/reservaties.class.php');

			$reservatie = new Reservatie;
			$id = $_GET['id'];
			$result = $reservatie->getById($id);
			foreach ($result as $row) {?>
		
		<form action="" method="post" id="form_edit">
			
			<label for="naam">Naam</label>
			<input type="text" id="naam" name="name" <?php echo "value='".$row['klantnaam']."'"?>>

			<label for="personen">Aantal personen</label>
			<input type="text" id="personen" name="personen"  <?php echo "value='".$row['aantalpersonen']."'"?>>

			<label for="datum">Datum</label>
			<input type="text" id="datum" name="datum" placeholder="dd-mm-jjjj"  <?php echo "value='".$row['datum']."'"?>>

			<label for="uur">Uur</label>
			<input type="text" id="uur" name="uur"  <?php echo "value='".$row['uur']."'"?>>

			<label for="tafel">Tafel</label>
			<input type="text" id="tafel" name="tafel"  <?php echo "value='".$row['tafelnr']."'"?>>

			<button type="submit">Opslaan</button>

		</form>


		<?php //----Tafel bewerken----
			} } elseif(!empty($_GET) && $_GET['type'] == 'tafel'){ 
			include_once('class/tafelindeling.class.php');

			$tafel = new Tafelindeling;
			$id = $_GET['id'];
			$result = $tafel->getById($id);
			foreach ($result as $row) {?>

			<form action="" method="post" id="form_edit">
			
				<label for="tafelnr">Tafelnr</label>
				<input type="text" id="tafelnr" name="tafels" <?php echo "value='".$row['tafelnr']."'"?>>

				<label for="personen">Max aantal personen</label>
				<input type="text" id="personen" name="personen"  <?php echo "value='".$row['aantalpersonen']."'"?>>

				<button type="submit">Opslaan</button>

			</form>


		<?php //----Menu bewerken----

			} } elseif(!empty($_GET) && $_GET['type'] == 'menu'){ 
			include_once('class/menu.class.php');

			$gerecht = new Menu;
			$id = $_GET['id'];
			$result = $gerecht->getById($id);
			foreach ($result as $row) {?>

			<form action="" method="post" id="form_edit">
			
				<label for="gerechtnaam">Gerecht</label>
				<input type="text" id="gerechtnaam" name="gerechtnaam" <?php echo "value='".$row['gerechtnaam']."'"?>>

				<label for="prijs">Prijs</label>
				<input type="text" id="prijs" name="prijs"  <?php echo "value='".$row['gerechtprijs']."'"?>>

				<label for="type">Type</label>
				<input type="text" id="type" name="type"  <?php echo "value='".$row['gerechttype']."'"?>>

				<button type="submit">Opslaan</button>

			</form>

		<?php } } ?>



	</section><!-- end content -->
	<script src="js/script_backend.js"></script>
</body>
</html>