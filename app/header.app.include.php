<?php 
$path = $_SERVER['SCRIPT_NAME'];
 ?>

<div id="headerOuter">
	<a id="top"></a>
		<div id="headerInner">
			<a href="restaurant.php" id="logo">Het Ketelke</a>
			<a href="#" id="ober">Ober</a>
			<a href="#" id="nav_toggle">Navigation Toggle</a>
		</div><!--end headerInner-->
	</div><!--end headerOuter-->

	<div id="navOuter">
		<nav>
			<ul>
				<li><a href="restaurant.php" <?php if($path == '/project/app/restaurant.php'){echo 'class="selected"';}; ?>>Restaurant</a></li>
				<li><a href="reserveren.php" <?php if($path == '/project/app/reserveren.php'){echo 'class="selected"';}; ?>>Reserveren</a></li>
				<li><a href="menu.php" <?php if($path == '/project/app/menu.php'){echo 'class="selected"';}; ?>>Menu</a></li>
				<li><a href="logout.php" id="logout_btn">Uitloggen</a></li>
			</ul>
		</nav>
	</div><!-- end navOuter -->