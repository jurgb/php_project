<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservaties</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Reservaties</h1>

		<table>
			<tbody>
				<tr>
					<th style="width: 20%;">Naam</th>
					<th style="width: 3%;">Personen</th>
					<th style="width: 15%;">Datum</th>
					<th style="width: 10%;">Uur</th>
					<th>Tafelnr</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post"></form>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
				</tr>

				<form action="" method="post">
					<tr>
						<td >Jonas Vrijsen</td>
						<td>4</td>
						<td>26 april 2014</td>
						<td>12:00</td>
						<td>25</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>Josefien Van de Berghe</td>
						<td>6</td>
						<td>26 augustus 2014</td>
						<td>12:30</td>
						<td>16</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>Bert Henkens</td>
						<td>2</td>
						<td>26 april 2014</td>
						<td>20:00</td>
						<td>2</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
				</form>
			</tbody>
		</table>
	</section><!-- end content -->
</body>
</html>