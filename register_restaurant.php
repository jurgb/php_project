<?php

	session_start();
	include_once("class/restaurants.class.php");
	include_once("class/openingsuren.class.php");
	$r = new Restaurant();



	if(!empty($_POST)){
			try {
				$r->Restaurantname = $_POST['restaurantname'];
				$r->Address = $_POST['address'];
				$r->Postalcode = $_POST['postalcode'];
				$r->City = $_POST['city'];
				$r->Telnr = $_POST['tel'];
				$r->Description = $_POST['restaurantdescription'];
				$r->Save();
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
				$openuren->Save();

				header('Location: login.php');
				
			} catch (Exception $e) {
				$alert= $e->getMessage();
			}
	}


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restaurant aanmaken</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen.css">
</head>
<body>
	<div id="headerOuter_sub">
		<div id="headerInner">
			
			<?php include_once('nav.include.php') ?>

		</div><!--end headerInner-->
	</div><!--end headerOuter-->
	<div id="title">
		<h1>Restaurant aanmaken</h1>

	</div><!--end title-->
	<div id="formOuter">
		<div id="formInner">
			<form action="" method="post">

				<?php 
					if(isset($alert)){
						echo "<div id='alert'>" . $alert . "</div>";
					}
				?>

				<label for="restaurantname">Restaurantnaam</label>
				<input type="text" id="restaurantname" name="restaurantname">

				<label for="address">Adres</label>
				<input type="text" id="address" name="address">

				<label for="postalcode">Postcode</label>
				<input type="text" id="postalcode" name="postalcode">

				<label for="city">Gemeente</label>
				<input type="text" id="city" name="city">

				<label for="tel">Telefoonnummer</label>
				<input type="text" id="tel" name="tel">

				<label for="restaurantdescription">Beschrijf uw restaurant</label>
				<textarea rows="5" cols="30" id="restaurantdescription" name="restaurantdescription"></textarea>
				<div class="form_edit3"	>	
			<h1 id="openingsuren">Openingsuren</h1>
			<p>(Laat de velden leeg indien u op de desbetreffende dag niet open bent)</p>
			<h2 id="voormiddag">voormiddag</h2>
			<h2 id="namiddag">namiddag</h2>
			<label for="maandag">Maandag</label>
				<input type="text" id="maandag" name="maandagopeno" value="10:00">
				<input type="text" id="maandag" name="maandagsluito" value="14:00">
				<input type="text" id="maandag" name="maandagopena" value="17:00">
				<input type="text" id="maandag" name="maandagsluita" value="21:00">
				

<hr width='99%' color='#4c1b1b' size='1'>
				<label for="dinsdag">Dinsdag</label>
				<input type="text" id="dinsdag" name="dinsdagopeno" value="10:00">
				<input type="text" id="dinsdag" name="dinsdagsluito" value="14:00">
				<input type="text" id="dinsdag" name="dinsdagopena" value="17:00">
				<input type="text" id="dinsdag" name="dinsdagsluita" value="21:00">
				

<hr width='99%' color='#4c1b1b'size='1'>
				<label for="woensdag">Woensdag</label>
				<input type="text" id="woensdag" name="woensdagopeno" value="10:00">
				<input type="text" id="woensdag" name="woensdagsluito" value="14:00">
				<input type="text" id="woensdag" name="woensdagopena" value="17:00">
				<input type="text" id="woensdag" name="woensdagsluita" value="21:00">
				

<hr width='99%'  color='#4c1b1b'size='1'>
				<label for="donderdag">Donderdag</label>
				<input type="text" id="donderdag" name="donderdagopeno" value="10:00">
				<input type="text" id="donderdag" name="donderdagsluito" value="14:00">
				<input type="text" id="donderdag" name="donderdagopena" value="17:00">
				<input type="text" id="donderdag" name="donderdagsluita" value="21:00">
				

<hr width='99%' color='#4c1b1b'size='1'>
				<label for="vrijdag">Vrijdag</label>
				<input type="text" id="vrijdag" name="vrijdagopeno" value="10:00">
				<input type="text" id="vrijdag" name="vrijdagsluito" value="14:00">
				<input type="text" id="vrijdag" name="vrijdagopena" value="17:00">
				<input type="text" id="vrijdag" name="vrijdagsluita" value="21:00">
			

<hr width='99%' color='#4c1b1b'size='1'>
				<label for="zaterdag">Zaterdag</label>
				<input type="text" id="zaterdag" name="zaterdagopeno" value="10:00">
				<input type="text" id="zaterdag" name="zaterdagsluito" value="14:00">
				<input type="text" id="zaterdag" name="zaterdagopena" value="17:00">
				<input type="text" id="zaterdag" name="zaterdagsluita" value="21:00">
				

<hr width='99%' color='#4c1b1b'size='1'>
				<label for="zondag">Zondag</label>
				<input type="text" id="zondag" name="zondagopeno" value="10:00">
				<input type="text" id="zondag" name="zondagsluito" value="14:00">
				<input type="text" id="zondag" name="zondagopena" value="17:00">
				<input type="text" id="zondag" name="zondagsluita" value="21:00">
				


				

			
</div>

				<button type="submit" id="btnSubmit" name="btnSubmit" class="shadow">Registreren</button>
			</form>
		</div><!--end formInner-->
	</div><!--end formOuter-->
	
	<?php include_once('footer.include.php') ?>
</body>
</html>