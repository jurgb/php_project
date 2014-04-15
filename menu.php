<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Menu</h1>

		<table>
			<tbody>
				<tr>
					<th style="width: 60%;">Gerecht</th>
					<th style="width: 10%;">Prijs</th>
					<th>Type</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post"></form>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
				</tr>

				<form action="" method="post">
					<tr>
						<td>Taartje van bloemkool en gelei van karwijzaad, gerookte maaspaling, zoet-zure groentjes en krokante venkel</td>
						<td>6,00 &euro;</td>
						<td>Voorgerecht</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>Tartaar van biologisch kalf in een dun jasje, gepocheerd krieleitje, aardappel limoen crisp en crème van raz el hanout</td>
						<td>7,50 &euro;</td>
						<td>Voorgerecht</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>Tournedos van Ossenhaas, krokant gebakken aardappeltjes, winterse groentes en jus met oude balsamico</td>
						<td>21,00 &euro;</td>
						<td>Hoofdgerecht</td>
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
