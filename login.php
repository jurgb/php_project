<?php  

	session_start();
	include_once('class/user.class.php');
	$u = new user();
	
	if(isset($_SESSION['loggedin']))
	{
		header('Location: dashboard.php');
	}
	else
	{
		if (!empty($_POST)) 
		{	
			try 
			{
				$u->login($_POST['email'],$_POST['password']);	
			} catch (Exception $e) {
				$alert= $e->getMessage();
			}
			
		}
	}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inloggen</title>

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
		<h1>Inloggen</h1>

	</div><!--end title-->

	<div id="formOuter">

		<div id="formInner">
			<form action="" method="post">
				<?php 

				if(isset($alert)){
					echo "<div id='alert'>" . $alert . "</div>";
				}
				 ?>
				<label for="email">Email</label>
				<input type="text" id="email" name="email">

				<label for="password">Wachtwoord</label>
				<input type="password" id="password" name="password">

				

				<button type="submit" class="shadow">Inloggen</button>
			</form>
		</div><!--end formInner-->
	</div><!--end formOuter-->
	
	<?php include_once('footer.include.php') ?>
</body>
</html>