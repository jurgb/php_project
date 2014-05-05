<?php  

	session_start();

	if(!empty($_POST))
		{
			if(isset($_POST['restaurant'])){
					$_SESSION['restaurant_id'] = $_POST['restaurant'];
			}
		}

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Dashboard</h1>
		
		<div id="myresto_link">
			
			<p>Via volgende link kunnen bezoekers in uw restaurant reserveren:</p><span id="restaurant_link">http://www.myresto.be/app/restaurant.php?id=<?= $_SESSION['restaurant_id'] ?></span>

		</div>
	</section><!-- end content -->
</body>
</html>