<?php 

	session_start();

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
		<h1>Restaurant</h1>

		<h2>Beschrijving</h2>
		<p><?php echo $_SESSION['a_beschrijving'] ?></p>

		<h2>Ligging</h2>
		<ul class="list">
			<li><?php echo $_SESSION['a_adres'] ?></li>
			<li><?php echo $_SESSION['a_postcode'] . " " . $_SESSION['a_gemeente'] ?></li>
			<li><?php echo $_SESSION['a_telefoonnr'] ?></li>
		</ul>

		<!-- <h2>Openingsuren</h2>
		<table>
			<tbody>
				<tr>
					<th>Maandag</th>
					<td>Gesloten</td>
				</tr>
				<tr>
					<th>Dinsdag</th>
					<td>Gesloten</td>
				</tr>
				<tr>
					<th>Woensdag</th>
					<td></td>
					<td>17:00 - 21:30</td>
				</tr>
				<tr>
					<th>Donderdag</th>
					<td></td>
					<td>17:00 - 21:30</td>
				</tr>
				<tr>
					<th>Vrijdag</th>
					<td></td>
					<td>17:00 - 21:30</td>
				</tr>
				<tr>
					<th>Zaterdag</th>
					<td></td>
					<td>17:00 - 21:30</td>
				</tr>
				<tr>
					<th>Zondag</th>
					<td>11:30 - 14:00</td>
					<td>17:00 - 21:30</td>
				</tr>
			</tbody>
		</table> -->


		<a href="#top" id="naarBoven">Naar boven</a>
	</section><!-- end content -->
	
	<script src="../js/script.js"></script>

</body>
</html>