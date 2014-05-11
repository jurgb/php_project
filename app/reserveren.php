<?php 

	session_start();
	include_once('../class/reservaties.class.php');
	include_once('../class/tafelindeling.class.php');
	include_once('../class/openingsuren.class.php');

	if(!empty($_POST)){
		// Wanneer het 'zoekformulier' gepost wordt
		if(isset($_POST['date'])){
			try {
				$res_datum = $_POST['date'];
				$res_aantalpersonen = $_POST['amountOfPeople'];
				
			} catch (Exception $e) {
				
			}
		}

		// Wanneer een tafel gereserveerd wordt
		if(isset($_POST['uur'])){
			if($_POST['uur'] == "BEZET"){
				$alert = "Dit uur is reeds gereserveerd, kies een ander uur";
			}
			else{
				try {
					
					$_SESSION['r_klantnaam'] = "Rob Rijken"; // TESTNAAM, moet nog vervangen worden door naam van facebook.
					$_SESSION['r_uur'] = $_POST['uur'];
					$_SESSION['r_aantalpersonen'] = $_POST['aantalpersonen'];
					$_SESSION['r_datum'] = $_POST['datum'];
					$_SESSION['r_tafelnr'] = $_POST['tafelnr'];

					$alert = "";
					
				} catch (Exception $e) {
					
				}
			}
		}

		// Wanneer een reservatie bevestigd wordt
		if(isset($_POST['s_uur'])){
			try {

				$res = new Reservatie();

				$res->Name = $_POST['s_klantnaam'];
				$res->Table = $_POST['s_tafelnr'];
				$res->Date = $_POST['s_datum'];
				$res->Uur = $_POST['s_uur'];
				$res->Personen = $_POST['s_aantalpersonen'];

				$res->saveAsUser();

				// reservatie uit sessie halen
				$_SESSION['r_klantnaam'] = "";
				$_SESSION['r_uur'] = "";
				$_SESSION['r_aantalpersonen'] = "";
				$_SESSION['r_datum'] = "";
				$_SESSION['r_tafelnr'] = "";

				$feedback = "Wij hebben uw reservatie succesvol ontvangen, bedankt!";
				
			} catch (Exception $e) {
				
			}
		}

	}

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
		<h1>Reserveren</h1>

		<?php if(!empty($alert)){

		echo "<div class='alert'>".$alert."</div>";
		}
		?>

			<form action="" method="post" id="form_reserveren">
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

			<?php  
				// Enkel uw reservatie tonen wanneer deze is geset
				if(!empty($_SESSION['r_uur'])){
			?>

			<h1>Uw reservatie</h1>

			<form action="" method="post">
				<table id="results_bevestigen">
					<tr>
						<th>Naam</th>
						<td><?= $_SESSION['r_klantnaam'] ?></td>
					</tr>
					<tr>
						<th># Personen</th>
						<td><?= $_SESSION['r_aantalpersonen'] ?></td>
					</tr>
					<tr>
						<th>Datum</th>
						<td><?= $_SESSION['r_datum'] ?></td>
					</tr>
					<tr>
						<th>Uur</th>
						<td><?= $_SESSION['r_uur'] ?></td>
					</tr>
					<tr>
						<th>Tafelnr</th>
						<td><?= $_SESSION['r_tafelnr'] ?></td>
					</tr>
				</table>

				<input type="text" name="s_datum" class="hide" value="<?= $_SESSION['r_datum'] ?>">
				<input type="text" name="s_aantalpersonen" class="hide" value="<?= $_SESSION['r_aantalpersonen'] ?>">
				<input type="text" name="s_tafelnr" class="hide" value="<?= $_SESSION['r_tafelnr'] ?>">
				<input type="text" name="s_uur" class="hide" value="<?= $_SESSION['r_uur'] ?>">
				<input type="text" name="s_klantnaam" class="hide" value="<?= $_SESSION['r_klantnaam'] ?>">

				<button type="submit" id="controleer_btn">Bevestigen</button>

			</form>

			<?php } 

			if(!empty($feedback)){
			?>

			<div class="feedback"><?= $feedback ?></div>


			<?php  
		}
			// Alleen wanneer de form gepost is resultaten tonen
			if(isset($_POST['date'])){

			$o = new Openingsuren();
			
			$dagenvandeweek = array(1 => "maandag", 
									2 => "dinsdag", 
									3 => "woensdag", 
									4 => "donderdag", 
									5 => "vrijdag", 
									6 => "zaterdag", 
									7 => "zondag"
								);

			// Kijken welke dag van de week de datum is
			$dagvandeweek = $dagenvandeweek[date('N', strtotime($res_datum))];
			$openingsuren = $o->getAllAsUser($dagvandeweek);

			foreach ($openingsuren as $openingsuur) {
				$opening_ochtend = strtotime($openingsuur['opening_ochtend']);
				$sluiting_ochtend = strtotime($openingsuur['sluiting_ochtend']);
				$opening_avond = strtotime($openingsuur['opening_avond']);
				$sluiting_avond = strtotime($openingsuur['sluiting_avond']);
				$alleuren = array();
				$gesloten = false;
				$alert2= "";
				// Alle uren van de dag in een array stoppen
				if($opening_ochtend != $sluiting_ochtend || $opening_avond != $sluiting_avond){
					for ($i=$opening_ochtend; $i <= $sluiting_ochtend-3600; $i+=1800) {
						array_push($alleuren, date('H:i', $i));
					}

					for ($i=$opening_avond; $i <= $sluiting_avond-3600; $i+=1800) {
						array_push($alleuren, date('H:i', $i));
					}
				} else{
					$gesloten = true;
					$alert2 = "Het restaurant is gesloten op deze dag!";
					echo "<div class='alert'>".$alert2."</div>";

				}

			}

			$t = new Tafelindeling();
			$r = new Reservatie();

			//alle tafels uit de database halen die groot genoeg zijn voor het aantal personen
			$tafels = $t->getByMaxPeople($res_aantalpersonen);

			// alle reservaties selecteren voor deze datum
			$reservaties = $r->getByDate($res_datum);
			
			if(!$gesloten){
			?>
			

			<h1><?= $res_datum; ?></h1>

			<table id="results">
				<tbody>
					<tr>
						<th style="width: 10%;">Tafel</th>
						<th>Uur</th>
						<th class="nopadding"></th>
					</tr>

			<?php

			// Kijken of het restaurant niet gesloten is op de gekozen dag

			// voor elke tafel kijken welke uren vrij of bezet zijn
			foreach ($tafels as $tafel) { ?> 
				<tr>
					<form action="" method="post">
					<td><?= $tafel['tafelnr'];  ?></td>
					<td>

					<select name="uur" id="results_select">

			<?php
				foreach($alleuren as $openingsuur){
					$openingsuur = strtotime($openingsuur);
					$bezet = false;
						foreach ($reservaties as $reservatie) {
							$reservatieuur = strtotime($reservatie['uur']);
							if($reservatie['tafel_id'] == $tafel['tafel_id']){
								if($reservatieuur == $openingsuur || $reservatieuur+1800 == $openingsuur || $reservatieuur+3600 == $openingsuur || $reservatieuur+5400 == $openingsuur || $reservatieuur+7200 == $openingsuur || $reservatieuur+9000 == $openingsuur){
									$bezet = true;
								}
							} 
						}

					// als het uur al gereserveerd is, toon BEZET
					if($bezet){
						echo "<option value='BEZET'>BEZET</option>";
					

					// anders toon het uur
					}	else{
						$openingsuur = date('H:i', $openingsuur);
						echo "<option value='".$openingsuur."'>".$openingsuur."</option>";
					}
				}

				?>
			
							</select>
							<input type="text" name="datum" class="hide" value="<?= $res_datum ?>">
							<input type="text" name="aantalpersonen" class="hide" value="<?= $res_aantalpersonen ?>">
							<input type="text" name="tafelnr" class="hide" value="<?= $tafel['tafelnr'] ?>">
						</td>
						<th class="nopadding white">
							<button id="reserveer_lnk" type="submit">Reserveren</button>
						</th>
						</form>
					</tr>

			<?php }  } 

			}

			?>

			
				</tbody>
			</table>


	</section><!-- end content -->
	
	<script src="../js/script.js"></script>

</body>
</html>