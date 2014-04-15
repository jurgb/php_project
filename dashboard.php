<?php  

	session_start();

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

		<table>
			<tbody>
				<tr>
					<th style="width: 5%;">Nummer</th>
					<th  style="width: 15%;">Aantal personen</th>
					<th>Datum</th>
					<th class="nopadding">
						<a href="#" class="btn_toevoegen">Toevoegen</a>
					</th>
					
				</tr>
				<tr>
					<td >1</td>
					<td>5</td>
					<td>26 april 2014</td>
					<th class="nopadding white">
						<a href="#" class="delete">Delete</a>
						<a href="#" class="edit">Edit</a>
					</th>
				</tr>
				<tr>
					<td>1</td>
					<td>5</td>
					<td>26 april 2014</td>
					<th class="nopadding white">
						<a href="#" class="delete">Delete</a>
						<a href="#" class="edit">Edit</a>
					</th>
				</tr>
				<tr>
					<td>1</td>
					<td>5</td>
					<td>26 april 2014</td>
					<th class="nopadding white">
						<a href="#" class="delete">Delete</a>
						<a href="#" class="edit">Edit</a>
					</th>
				</tr>
			</tbody>
		</table>
	</section><!-- end content -->
</body>
</html>