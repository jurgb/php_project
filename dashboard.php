<?php  

	session_start();
	include_once('class/reservaties.class.php');
	$res = new Reservatie();

	if(!isset($_SESSION['loggedin']))
	{
		header('Location: login.php');
	}

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
			
			<p>Via volgende link kunnen bezoekers in uw restaurant reserveren:</p><span id="restaurant_link">http://www.myresto.be/app/login.php?id=<?php echo $_SESSION['restaurant_id'] ?></span>
		</div>

		<?php 
			$all = $res->getAll(); 
			if($all){ 
		?>
				<h1>Momenteel in het restaurant</h1>

				<table>
					<tbody>
					<tr>
						<th style="width: 10%;">Tafelnr</th>
						<th style="width: 20%;">Naam</th>
						<th style="width: 3%;">Personen</th>
						<th style="width: 15%;">Datum</th>
						<th>Uur</th>
						
						
					</tr>


		<?php 
				foreach($all as $a) { 
					$reservatie_tijd = strtotime($a['datum']." ". $a['uur']);

					// De reservaties op dit moment plaatsvinden (dus de mensen die nu in het restaurant zijn)
					if(time() >= $reservatie_tijd && time() <= $reservatie_tijd + 3600*3){
		?>
						<tr>
							<td><?= $a['tafelnr'] ?></td>
							<td><?= $a['klantnaam'] ?></td>				
							<td><?= $a['aantalpersonen']?></td>					
							<td><?= $a['datum'] ?></td>
							<td><?= $a['uur'] ?></td>			
						</tr>
				
 		<?php 
 					}
 				} 
 			}
 		?>
			
	</section><!-- end content -->
</body>
</html>