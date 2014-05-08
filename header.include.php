<?php 
$path = $_SERVER['SCRIPT_NAME'];
include_once('class/restaurants.class.php');
$restaurant = new Restaurant();

if(empty($_SESSION['restaurant_id'])){
	$result2 = $restaurant->getFirst();
	
	$_SESSION['restaurant_id'] = $result2['restaurant_id'];



}

 ?>


<div id="headerOuter">
		<div id="headerInner">
			<a href="dashboard.php" id="logo">myResto</a>
			<div id="welcome">
				<p>Welkom, <?php echo $_SESSION['naam'] ?></p>
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
					<?php 
						$restaurant = new Restaurant();
						$result = $restaurant->getAll();

						foreach ($result as $restaurant) {
							var_dump($restaurant);
							echo "<option value = '". $restaurant['restaurant_id'] ."'";
							if($restaurant['restaurant_id'] == $_SESSION['restaurant_id']){
								echo "selected>";
							} else{
								echo ">";
							}
							echo $restaurant['restaurantnaam'];
							echo "</option>";

						}

						echo $_SESSION['restaurant_id'];
					 ?>
				</select>
				<button type="submit" id="selectrestaurant" title="Restaurant selecteren">Restaurant selecteren</button>
				<a href="add_restaurant.php" id="addrestaurant">Restaurant toevoegen</a>
			</form>
		</div><!--end headerInner-->
	</div><!--end headerOuter-->