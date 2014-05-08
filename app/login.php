<?php 

  session_start();
  include_once('../class/restaurants.class.php');
  $r = new Restaurant();

  if(!empty($_GET)){
    $_SESSION['a_restaurant_id'] = $_GET['id'];

    // info van restaurant ophalen aan de hand van de ID uit de URL
    $restaurant = $r->getFirstByRestaurant();
    $_SESSION['a_user_id'] = $restaurant['user_id'];
    $_SESSION['a_restaurantnaam'] = $restaurant['restaurantnaam'];
    $_SESSION['a_beschrijving'] = $restaurant['beschrijving'];
    $_SESSION['a_adres'] = $restaurant['adres'];
    $_SESSION['a_postcode'] = $restaurant['postcode'];
    $_SESSION['a_gemeente'] = $restaurant['gemeente'];
    $_SESSION['a_telefoonnr'] = $restaurant['telefoonnr'];

  }

 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=  $_SESSION['a_restaurantnaam'] ?></title>

	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/screen_app.css">

	<script src="../js/jquery.min.js"></script>
  
</head>
<body id="loginpage">

	<a href="../index.php" id="loginlogo">My Resto</a>
<h3 id="logintitle"><?=  $_SESSION['a_restaurantnaam'] ?></h3>


<div id="status">
</div>
<a href="restaurant.php" id="login_btn_fb">Inloggen met facebook</a>
<a href="restaurant.php" id="login_btn_google">Inloggen met Google+</a>
</body>
</html>