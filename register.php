<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registreren</title>

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
		<h1>Registreren</h1>

	</div><!--end title-->
	<div id="formOuter">
		<div id="formInner">
			<form action="" method="post">
				<label for="name">Naam</label>
				<input type="text" id="name" name="name">

				<label for="firstname">Voornaam</label>
				<input type="text" id="firstname" name="firstname">

				<label for="password">Wachtwoord</label>
				<input type="password" id="password" name="password">

				<label for="repeatpassword">Herhaal wachtwoord</label>
				<input type="password" id="repeatpassword" name="repeatpassword">

				<label for="namerestaurant">Naam restaurant</label>
				<input type="text" id="namerestaurant" name="namerestaurant">

				<label for="email">Email</label>
				<input type="text" id="email" name="email">

				<label for="address">Adres</label>
				<input type="text" id="address" name="address">

				<label for="postalcode">Postcode</label>
				<input type="text" id="postalcode" name="postalcode">

				<button type="submit" class="shadow">Registreren</button>
			</form>
		</div><!--end formInner-->
	</div><!--end formOuter-->
	
	<?php include_once('footer.include.php') ?>
</body>
</html>