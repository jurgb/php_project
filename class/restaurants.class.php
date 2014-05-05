<?php
/* restaurant class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/
	include_once("Db.class.php");
	
	class Restaurant
	{	
	
		private $m_sRestaurantname;
		private $m_sAddress;
		private $m_sPostalcode;
		private $m_sCity;
		private $m_sTelnr;
		private $m_sDescription;
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Restaurantname":
					$this->m_sRestaurantname =$p_vValue;
					break;
				case "Address":
					$this->m_sAddress =$p_vValue;
					break;
				case "Postalcode":
					if(strlen($p_vValue) > 4)
					{
						throw new Exception("Ongeldige postcode");	
					}
					else{
						$this->m_sPostalcode = $p_vValue;
					}
				case "City":
					$this->m_sCity =$p_vValue;
					break;
				case "Telnr":
					$this->m_sTelnr =$p_vValue;
					break;
				case "Description":
					$this->m_sDescription =$p_vValue;
					break;
			}
		}
		
		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Restaurantname":
					return $this->m_sRestaurantname;
					break;
				case "Address":
					return $this->m_sAddress;
					break;
				case "Postalcode":
					return $this->m_sPostalcode;
					break;
				case "City":
					return $this->m_sCity;
					break;
				case "Telnr":
					return $this->m_sTelnr;
					break;
				case "Description":
					return $this->m_sDescription;
					break;
			}
		}
		
		public function Save()
		{

			if(!isset($_SESSION['user_id']))
			{
				header('Location: login.php');
			} else {
				//save restaurant to database	
				$db = new Db();
					$sql = "INSERT INTO tbl_restaurants (user_id, restaurantnaam, beschrijving, adres, postcode, gemeente, telefoonnr)
				VALUES ('".$_SESSION['user_id']."',
						'".$db->conn->real_escape_string($this->m_sRestaurantname)."',
						'".$db->conn->real_escape_string($this->m_sDescription)."',
						'".$db->conn->real_escape_string($this->m_sAddress)."',
						'".$db->conn->real_escape_string($this->m_sPostalcode)."',
						'".$db->conn->real_escape_string($this->m_sCity)."',
						'".$db->conn->real_escape_string($this->m_sTelnr)."'
				)";
				$db->conn->query($sql);

				//restaurant_id van de geregistreerde gebruiker in de session variabele opslaan
				$restaurant_id = $db->conn->insert_id;
				$_SESSION['restaurant_id'] = $restaurant_id;
			}
			

		}

		public function getAll(){
			$db = new Db();
			$sql = "SELECT * FROM tbl_restaurants WHERE user_id = {$_SESSION['user_id']}";
			$result = $db->conn->query($sql);
			return $result;
		}

		public function getFirst(){
			$db = new Db();
			$sql = "SELECT * FROM tbl_restaurants WHERE user_id = {$_SESSION['user_id']} LIMIT 1";
			$result = $db->conn->query($sql);
			return $result;
		}
	}
	
?>