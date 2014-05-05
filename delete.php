<?php
	session_start();
			if(!empty($_GET)){

				if($_GET['type'] == 'reservatie'){ 
					include_once('class/reservaties.class.php');

					$reservatie = new Reservatie;
					$id = $_GET['id'];
					$reservatie->Delete($id);
					header('Location: reservaties.php');
				}

				elseif($_GET['type'] == 'tafel'){ 
					include_once('class/tafelindeling.class.php');

					$tafel = new Tafelindeling;
					$id = $_GET['id'];
					$tafel->Delete($id);
					header('Location: tafelindeling.php');
				}

				elseif($_GET['type'] == 'menu'){ 
					include_once('class/menu.class.php');

					$gerecht = new Menu;
					$id = $_GET['id'];
					$gerecht->Delete($id);
					header('Location: menu.php');
				}
			}
		?>