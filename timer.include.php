<?php 
include_once('class/restaurants.class.php');
$restaurant = new Restaurant();

if(empty($_SESSION['restaurant_id'])){
	$result2 = $restaurant->getFirst();
	
	$_SESSION['restaurant_id'] = $result2['restaurant_id'];



}

 ?>


<script type="text/javascript">
document.write ('<p id="date-time">', new Date().toLocaleString(), '<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 80)
}
</script>