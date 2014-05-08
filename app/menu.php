<?php 

	session_start();
	include_once("../class/menu.class.php");

 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['a_restaurantnaam'] ?></title>

	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/screen_app.css">

	<script src="../js/jquery.min.js"></script>
</head>
<body>

	<?php include('header.app.include.php') ?>

	<section id="content">
		<h1>Menu</h1>

		<?php 

		$m = new Menu();
		$gerechttypes = $m->getDistinctGerechttype();

		// Voor elk uniek gerechttype, print alle gerechten van dat type af
		foreach ($gerechttypes as $type){
			echo "<h2>" . $type['gerechttype'] . "</h2>";

			$all = $m->getByGerechttype($type['gerechttype']);

			echo "<ul class='gerechten'>";
			foreach ($all as $gerecht) {
				echo "<li>" . $gerecht['gerechtnaam'] . "<span class='prijs'>€ " . $gerecht['gerechtprijs'] . "</span></li>";
			}
			echo "</ul>";
		}?>

		<a href="#top" id="naarBoven">Naar boven</a>
	</section><!-- end content -->
	
	<script src="../js/script.js"></script>

</body>
</html>