<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Het Ketelke</title>

	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/screen_app.css">

	<script src="../js/jquery.min.js"></script>
</head>
<body>

	<?php include('header.app.include.php') ?>

	<section id="content">
		<h1>Reserveren</h1>

			<form action="" method="post" id="form_reserveren">
				<div class="alert">Hier komen eventuele errors</div>
				<div class="padding">
				<label for="date">Datum</label>
				<input type="text" placeholder="dd-mm-jjjj" id="date" name="date">
			
				<label for="amountOfPeople">Aantal personen</label>
				<select name="amountOfPeople" id="amountOfPeople">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</div><!-- end padding -->
				<button type="submit" id="controleer_btn">Controleren</button>
			</form>

			<h1>23-05-2014</h1>

			<table id="results">
				<tbody>
					<tr>
						<th>Uur</th>
						<th class="nopadding"></th>
					</tr>
					<tr>
						<td>11:30</td>
						<th class="nopadding white">
							<a href="" id="reserveer_lnk">Reserveren</a>
						</th>
					</tr>
					<tr>
						<td>13:00</td>
						<th class="nopadding white">
							<a href="" id="reserveer_lnk">Reserveren</a>
						</th>
					</tr>
				</tbody>
			</table>
		
		<!--<table>
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
		</table>-->
	</section><!-- end content -->
	
	<script src="../js/script.js"></script>

</body>
</html>