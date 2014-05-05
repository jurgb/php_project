<?php
/* menu class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/
	include_once("Db.class.php");
	
	class Menu
	{	
	
		private $m_sGerecht;
		private $m_iPrijs;
		private $m_sType;
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Gerecht":
					$this->m_sGerecht =$p_vValue;
					break;
				case "Prijs":
					$this->m_iPrijs =$p_vValue;
					break;
				case "Type":
					$this->m_sType =$p_vValue;
					break;
			}
		}
		
		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Gerecht":
					return $this->m_sGerecht;
					break;
				case "Prijs":
					return $this->m_iPrijs;
					break;
				case "Type":
					return $this->m_sType;
					break; 
				
			}
		}
		
		public function getAll()
		{
		$db = new db();
		$id = $_SESSION['restaurant_id'];
		$sql="SELECT * from tbl_gerechten WHERE restaurant_id = $id ORDER BY gerechttype ASC, gerechtnaam ASC";
		$result = $db->conn->query($sql);
		return $result;



		}
		public function Save()
		{
			//save user to database	
			$db = new Db();
			$sql = "INSERT INTO tbl_gerechten (restaurant_id, gerechtnaam, gerechtprijs, gerechttype )
			VALUES ('".$_SESSION['restaurant_id']."',
				'".$db->conn->real_escape_string($this->m_sGerecht)."',
					'".$db->conn->real_escape_string($this->m_iPrijs)."',
					'".$db->conn->real_escape_string($this->m_sType)."'
					
			)";
			$db->conn->query($sql);
			//echo "query is : " . "</br>" . $sql;
		}

		public function getById($id)
		{
		$db = new db();
		$sql="SELECT * from tbl_gerechten WHERE gerecht_id = '$id'";
		$result = $db->conn->query($sql);
		return $result;
		}

		public function Delete($id)
		{
		$db = new db();
		$sql="DELETE FROM tbl_gerechten WHERE gerecht_id = '$id'";
		$db->conn->query($sql);
		}

		public function Update(){

		$db = new Db();
		$id= $_GET['id'];
			$sql = "UPDATE tbl_gerechten
			SET restaurant_id = '".$_SESSION['restaurant_id']."',
				gerechtnaam = '".$db->conn->real_escape_string($this->m_sGerecht)."',
				gerechtprijs = '".$db->conn->real_escape_string($this->m_iPrijs)."',
				gerechttype = '".$db->conn->real_escape_string($this->m_sType)."'
			WHERE gerecht_id = $id";
			$db->conn->query($sql);
		}
		
	
	}
	
?>