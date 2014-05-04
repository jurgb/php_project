<?php

	session_start();
	include_once("class/restaurants.class.php");
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

				<button type="submit" id="btnSubmit" name="btnSubmit" class="shadow">Registreren</button>
			</form>
		</div><!--end formInner-->
	</div><!--end formOuter-->
	
	<?php include_once('footer.include.php') ?>
</body>
</html>