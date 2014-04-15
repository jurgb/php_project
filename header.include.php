<?php 
$path = $_SERVER['SCRIPT_NAME'];
 ?>

<div id="headerOuter">
		<div id="headerInner">
			<a href="dashboard.php" id="logo">myResto</a>
			<div id="welcome">
				<p>Welkom, Anonymous!</p>
				<a href="logout.php" id="logout_btn">Uitloggen</a>
			</div><!-- end welcome -->
			<nav>
				<ul>
					<li><a href="dashboard.php"
						<?php if($path == '/myresto/dashboard.php'){echo 'class="current"';}; ?>
						>Dashboard</a></li>
					<li><a href="reservaties.php" 
						<?php if($path == '/myresto/reservaties.php'){echo 'class="current"';}; ?>
						>Reservaties</a></li>
					<li><a href="tafelindeling.php"
						<?php if($path == '/myresto/tafelindeling.php'){echo 'class="current"';}; ?>
						>Tafelindeling</a></li>
					<li><a href="menu.php"
						<?php if($path == '/myresto/menu.php'){echo 'class="current"';}; ?>
						>Menu</a></li>
				</ul>
			</nav>

			<form action="" method="post">
				<select name="restaurant" id="restaurant">
					<option value="restaurant1">'t Keteltje</option>
					<option value="restaurant2">Frituur Suzanne</option>
				</select>
				<a href="#" id="addrestaurant">Restaurant toevoegen</a>
			</form>
		</div><!--end headerInner-->
	</div><!--end headerOuter-->