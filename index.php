<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>myResto</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/screen.css">
</head>
<body>
	<div id="headerOuter">
		<div id="headerInner">
			
			<?php include_once('nav.include.php') ?>

			<h1 class="slogan">Met <span class="slogan_brown">my<span class="slogan_bold">Resto</span></span> beheert en runt u gemakkelijk</h1>
			<h1 class="slogan">uw eigen restaurant</h1>
			<a href="register.php" id="register_btn" class="shadow">Nu registreren</a>
		</div><!--end headerInner-->
	</div><!--end headerOuter-->
	<div id="infoblocks">
		<ul>
			<li>
				<img src="images/info1.png" alt="intuitieve interface">
				<h2>Intuïtieve interface</h2>
				<p>Met onze gebruiksvriendelijke interface kan u gemakkelijk uw tafelverdeling, menu's, reservaties en nog meer beheren.</p>
			</li>
			<li>
				<img src="images/info2.png" alt="reserveren on-the-go">
				<h2>Reserveren on-the-go</h2>
				<p>Met slechts een aantal klikken kunnen bezoekers een reservatie maken in uw restaurant. Om authentieke reservaties te garanderen wordt er gebruik gemaakt van Facebook-login</p>
			</li>
			<li>
				<img src="images/info3.png" alt="live updates">
				<h2>Live updates</h2>
				<p>Om dubbele reservaties te vermijden blijven gebruikers door live updates steeds op de hoogte van de tafelbezetting in het restaurant.</p>
			</li>
		</ul>
	</div><!--end infoblocks-->
	<div id="featuresOuter">
		<div id="featuresInner">
			<img src="images/screenshots.png" alt="myResto user interface screenshot">
			<h2>Features</h2>
			<div id="feature_right">
			<ul id="featurelist">
				<li>Eén of meerdere restaurants aanmaken</li>
				<li>Binnenkomende reservaties bekijken</li>
				<li>Reservaties toevoegen, bewerken &amp; verwijderen</li>
				<li>Tafelindeling bewerken</li>
				<li>De actuele menu's beheren</li>
				<li>Beoordeling van de bezoekers bekijken</li>
			</ul>
			<a href="register.php" id="uitproberen_btn" class="shadow">Nu uitproberen</a>
			</div>
		</div><!--end featuresInner-->
	</div><!--end featuresOuter-->
	
	<?php include_once('footer.include.php') ?>
</body>
</html>