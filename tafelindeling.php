<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tafelindeling</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen_backend.css">
</head>
<body>

	<?php include('header.include.php') ?>

	<section id="content">
		<h1>Tafelindeling</h1>

		<table>
			<tbody>
				<tr>
					<th style="width: 10%;">Tafelnr</th>
					<th>Max aantal personen</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				
				<tr id="inputs_toevoegen">
					<form action="" method="post"></form>
					<td><input type="text"></td>
					<td><input type="text"></td>
					<th class="nopadding white"><button type="submit" class="save"></button></th>
				</tr>

				<form action="" method="post">
					<tr>
						<td>1</td>
						<td>4</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>2</td>
						<td>6</td>
						<th class="nopadding white">
							<button type="submit" class="delete">Delete</button>
							<button type="submit" class="edit">Edit</button>
						</th>
					</tr>
					<tr>
						<td>3</td>
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