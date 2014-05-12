<?php

	session_start();

	include_once("class/User.class.php");
	$u = new User();

	if(!empty($_POST))
	{
		$username = $_POST['email'];
		if ($usernameavaileble = $u->Check($username) == "free") {
			
			if ($_POST['password'] == $_POST['repeatpassword']) {
				try {
					$u->Name = $_POST['name'];
					$u->Firstname = $_POST['firstname'];
					$u->Email = $_POST['email'];
					$u->Password = $_POST['password'];
					$u->Save();

					header('Location: register_restaurant.php');

				} catch (Exception $e) {
					$alert= $e->getMessage();
				}

			} else
			{
				$alert = "passwords don't match!";
			}
		}
		else
		{
			$alert = "This e-mail adres is already taken";
		}
	}


?><!doctype html>
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

				<?php 
					if(isset($alert)){
						echo "<div class='alert'>" . $alert . "</div>";
					}
				?>
				<div id='alert' style="display: none;"></div>
				<label for="name">Naam</label>
				<input type="text" id="name" name="name">

				<label for="firstname">Voornaam</label>
				<input type="text" id="firstname" name="firstname">

				<label for="password">Wachtwoord</label>
				<input type="password" id="password" name="password">

				<label for="repeatpassword">Herhaal wachtwoord</label>
				<input type="password" id="repeatpassword" name="repeatpassword">

				<label for="email">Email</label>
				<input type="text" id="email" name="email">

				<button type="submit" id="btnSubmit" name="btnSubmit" class="shadow">Registreren</button>
			</form>
		</div><!--end formInner-->
	</div><!--end formOuter-->
	
	<?php include_once('footer.include.php') ?>
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax_registratie.js"></script>
</body>
</html>