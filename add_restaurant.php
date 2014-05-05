<?php 

session_start();
	include_once("class/restaurants.class.php");
	$r = new Restaurant();


	if(!empty($_POST)){
		if(isset($_POST['restaurant'])){
			$_SESSION['restaurant_id'] = $_POST['restaurant'];
		} else
		{
			try {
				$r->Restaurantname = $_POST['restaurantname'];
				$r->Address = $_POST['address'];
				$r->Postalcode = $_POST['postalcode'];
				$r->City = $_POST['city'];
				$r->Telnr = $_POST['tel'];
				$r->Description = $_POST['restaurantdescription'];
				$r->Save();

				header('Location: dashboard.php');
				
			} catch (Exception $e) {
				$alert= $e->getMessage();
			}
		}
	}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restaurant toevoegen</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">

	<script src="js/jquery.min.js"></script>
</head>
<body>
	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Restaurant toevoegen</h1>

		<form action="" method="post" id="form_edit">
			
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

			<button type="submit">Opslaan</button>

		</form>


	</section><!-- end content -->
	<script src="js/script_backend.js"></script>
</body>
</html>