<?php  

	session_start();
include_once("class/openingsuren.class.php");
include_once('class/restaurants.class.php');

	
			if(isset($_POST['restaurant'])){
					$_SESSION['restaurant_id'] = $_POST['restaurant'];
			} else{
				if(!empty($_POST))
				{
					if(!empty($_POST['restaurantname'])){
						$r = new Restaurant();
						$r->Restaurantname = $_POST['restaurantname'];
						$r->Address = $_POST['address'];
						$r->Postalcode = $_POST['postalcode'];
						$r->City = $_POST['city'];
						$r->Telnr = $_POST['tel'];
						$r->Description = $_POST['restaurantdescription'];

						$r->update();
					} else{

						$openuren = new Openingsuren;
						$openuren->Maandag_opening_ochtend = $_POST['maandagopeno'];
						$openuren->Maandag_sluiting_ochtend = $_POST['maandagsluito'];
						$openuren->Maandag_opening_avond = $_POST['maandagopena'];
						$openuren->Maandag_sluiting_avond = $_POST['maandagsluita'];

						$openuren->Dinsdag_opening_ochtend = $_POST['dinsdagopeno'];
						$openuren->Dinsdag_sluiting_ochtend = $_POST['dinsdagsluito'];
						$openuren->Dinsdag_opening_avond = $_POST['dinsdagopena'];
						$openuren->Dinsdag_sluiting_avond = $_POST['dinsdagsluita'];

						$openuren->Woensdag_opening_ochtend = $_POST['woensdagopeno'];
						$openuren->Woensdag_sluiting_ochtend = $_POST['woensdagsluito'];
						$openuren->Woensdag_opening_avond = $_POST['woensdagopena'];
						$openuren->Woensdag_sluiting_avond = $_POST['woensdagsluita'];

						$openuren->Donderdag_opening_ochtend = $_POST['donderdagopeno'];
						$openuren->Donderdag_sluiting_ochtend = $_POST['donderdagsluito'];
						$openuren->Donderdag_opening_avond = $_POST['donderdagopena'];
						$openuren->Donderdag_sluiting_avond = $_POST['donderdagsluita'];

						$openuren->Vrijdag_opening_ochtend = $_POST['vrijdagopeno'];
						$openuren->Vrijdag_sluiting_ochtend = $_POST['vrijdagsluito'];
						$openuren->Vrijdag_opening_avond = $_POST['vrijdagopena'];
						$openuren->Vrijdag_sluiting_avond = $_POST['vrijdagsluita'];

						$openuren->Zaterdag_opening_ochtend = $_POST['zaterdagopeno'];
						$openuren->Zaterdag_sluiting_ochtend = $_POST['zaterdagsluito'];
						$openuren->Zaterdag_opening_avond = $_POST['zaterdagopena'];
						$openuren->Zaterdag_sluiting_avond = $_POST['zaterdagsluita'];

						$openuren->Zondag_opening_ochtend = $_POST['zondagopeno'];
						$openuren->Zondag_sluiting_ochtend = $_POST['zondagsluito'];
						$openuren->Zondag_opening_avond = $_POST['zondagopena'];
						$openuren->Zondag_sluiting_avond = $_POST['zondagsluita'];

						$openuren->update();

					}
				}
			}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instellingen</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Instellingen</h1>
		<?php include('timer.include.php') ?>
		
		<div id="bgdashboard">

		<?php	
		include_once('class/restaurants.class.php');

			
			$r = new Restaurant;
			$id = $_SESSION['restaurant_id'];
			$result = $r->getById($id);
			foreach ($result as $row) 
				{?>
			
		<form action="" method="post" id="form_edit" name="form_edit" class="form_edit2">
			<h1>Restaurantgegevens wijzigen</h1>
			<label for="restaurantname">Restaurantnaam</label>
				<input type="text" id="restaurantname" name="restaurantname" <?php echo "value='".$row['restaurantnaam']."'"?>>

				<label for="address">Adres</label>
				<input type="text" id="address" name="address" <?php echo "value='".$row['adres']."'"?>>

				<label for="postalcode">Postcode</label>
				<input type="text" id="postalcode" name="postalcode" <?php echo "value='".$row['postcode']."'"?>>

				<label for="city">Gemeente</label>
				<input type="text" id="city" name="city" <?php echo "value='".$row['gemeente']."'"?>>

				<label for="tel">Telefoonnummer</label>
				<input type="text" id="tel" name="tel" <?php echo "value='".$row['telefoonnr']."'"?>>

				<label for="restaurantdescription">Beschrijf uw restaurant</label>

				<textarea rows="5" cols="30" id="restaurantdescription" name="restaurantdescription" ><?php echo $row['beschrijving']?></textarea>
				<button type="submit">Opslaan</button>
				</form>
		<?php }  ?>

	<form action="" method="post" id="form_edit" name="openingsuren" class="form_edit3">
	<?php	
		include_once('class/openingsuren.class.php');

			
			$o = new Openingsuren;
			$openingsuren = $o->getAll();
			foreach ($openingsuren as $row) 
				{?>
			<h1 id="openingsuren">Openingsuren</h1>
			<p>(Laat de velden leeg indien u op de desbetreffende dag niet open bent)</p>
			<h2 id="voormiddag">voormiddag</h2>
			<h2 id="namiddag">namiddag</h2>
			<label for="maandag">Maandag</label>
				<input type="text" id="maandag" name="maandagopeno" <?php echo "value='".$row['maandag_opening_ochtend']."'"?>>
				<input type="text" id="maandag" name="maandagsluito" <?php echo "value='".$row['maandag_sluiting_ochtend']."'"?>>
				<input type="text" id="maandag" name="maandagopena" <?php echo "value='".$row['maandag_opening_avond']."'"?>>
				<input type="text" id="maandag" name="maandagsluita" <?php echo "value='".$row['maandag_sluiting_avond']."'"?>>
				

				<hr width='99%' color='#4c1b1b' size='1'>
				<label for="dinsdag">Dinsdag</label>
				<input type="text" id="dinsdag" name="dinsdagopeno"<?php echo "value='".$row['dinsdag_opening_ochtend']."'"?>>
				<input type="text" id="dinsdag" name="dinsdagsluito"<?php echo "value='".$row['dinsdag_sluiting_ochtend']."'"?>>
				<input type="text" id="dinsdag" name="dinsdagopena"<?php echo "value='".$row['dinsdag_opening_avond']."'"?>>
				<input type="text" id="dinsdag" name="dinsdagsluita"<?php echo "value='".$row['dinsdag_sluiting_avond']."'"?>>
				

				<hr width='99%' color='#4c1b1b'size='1'>
				<label for="woensdag">Woensdag</label>
				<input type="text" id="woensdag" name="woensdagopeno"<?php echo "value='".$row['woensdag_opening_ochtend']."'"?>>
				<input type="text" id="woensdag" name="woensdagsluito"<?php echo "value='".$row['woensdag_sluiting_ochtend']."'"?>>
				<input type="text" id="woensdag" name="woensdagopena"<?php echo "value='".$row['woensdag_opening_avond']."'"?>>
				<input type="text" id="woensdag" name="woensdagsluita"<?php echo "value='".$row['woensdag_sluiting_avond']."'"?>>
				

				<hr width='99%'  color='#4c1b1b'size='1'>
				<label for="donderdag">Donderdag</label>
				<input type="text" id="donderdag" name="donderdagopeno"<?php echo "value='".$row['donderdag_opening_ochtend']."'"?>>
				<input type="text" id="donderdag" name="donderdagsluito"<?php echo "value='".$row['donderdag_sluiting_ochtend']."'"?>>
				<input type="text" id="donderdag" name="donderdagopena"<?php echo "value='".$row['donderdag_opening_avond']."'"?>>
				<input type="text" id="donderdag" name="donderdagsluita"<?php echo "value='".$row['donderdag_sluiting_avond']."'"?>>
				

				<hr width='99%' color='#4c1b1b'size='1'>
				<label for="vrijdag">Vrijdag</label>
				<input type="text" id="vrijdag" name="vrijdagopeno"<?php echo "value='".$row['vrijdag_opening_ochtend']."'"?>>
				<input type="text" id="vrijdag" name="vrijdagsluito"<?php echo "value='".$row['vrijdag_sluiting_ochtend']."'"?>>
				<input type="text" id="vrijdag" name="vrijdagopena"<?php echo "value='".$row['vrijdag_opening_avond']."'"?>>
				<input type="text" id="vrijdag" name="vrijdagsluita"<?php echo "value='".$row['vrijdag_sluiting_avond']."'"?>>
			

				<hr width='99%' color='#4c1b1b'size='1'>
				<label for="zaterdag">Zaterdag</label>
				<input type="text" id="zaterdag" name="zaterdagopeno"<?php echo "value='".$row['zaterdag_opening_ochtend']."'"?>>
				<input type="text" id="zaterdag" name="zaterdagsluito"<?php echo "value='".$row['zaterdag_sluiting_ochtend']."'"?>>
				<input type="text" id="zaterdag" name="zaterdagopena"<?php echo "value='".$row['zaterdag_opening_avond']."'"?>>
				<input type="text" id="zaterdag" name="zaterdagsluita"<?php echo "value='".$row['zaterdag_sluiting_avond']."'"?>>
				

				<hr width='99%' color='#4c1b1b'size='1'>
				<label for="zondag">Zondag</label>
				<input type="text" id="zondag" name="zondagopeno"<?php echo "value='".$row['zondag_opening_ochtend']."'"?>>
				<input type="text" id="zondag" name="zondagsluito"<?php echo "value='".$row['zondag_sluiting_ochtend']."'"?>>
				<input type="text" id="zondag" name="zondagopena"<?php echo "value='".$row['zondag_opening_avond']."'"?>>
				<input type="text" id="zondag" name="zondagsluita"<?php echo "value='".$row['zondag_sluiting_avond']."'"?>>
				


				

			<button type="submit">Opslaan</button>

		<?php }  ?>
		</form>

	</div>
	<?php if (count($_POST)>0) echo "Form Submitted!"; ?>
	</section><!-- end content -->
</body>
</html>