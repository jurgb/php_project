<?php
/* tafelindeling class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/
	include_once("Db.class.php");
	
	class Tafelindeling
	{	
	
		private $m_iTafelnummer;
		private $m_iPersonen;
		
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Tafelnr":
					$this->m_iTafelnummer =$p_vValue;
					break;
				case "Aantalpersonen":
					$this->m_iPersonen =$p_vValue;
					break;
				
			}
		}
		
		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Tafelnr":
					return $this->m_iTafelnummer;
					break;
				case "Aantalpersonen":
					return $this->m_iPersonen;
					break;
				
			}
		}
		
		public function getAll()
		{
		$db = new db();
		$id = $_SESSION['restaurant_id'];
		$sql="SELECT * FROM tbl_tafels WHERE restaurant_id = $id ORDER BY tafelnr ASC, aantalpersonen ASC";
		$result = $db->conn->query($sql);
		return $result;
		}

		public function getByMaxPeople($aantal)
		{
		$db = new db();
		$sql="select * from tbl_tafels WHERE aantalpersonen >= '$aantal'";
		$result = $db->conn->query($sql);
		return $result;
		}

		public function Save()
		{
			//save user to database	
			$db = new Db();
			$sql = "INSERT INTO tbl_tafels(tafelnr,restaurant_id,aantalpersonen )
			VALUES ('".$db->conn->real_escape_string($this->m_iTafelnummer)."',
					'". $_SESSION['restaurant_id'] ."',
					'".$db->conn->real_escape_string($this->m_iPersonen)."'
					
			)";
			$db->conn->query($sql);
		}

		public function getById($id)
		{
		$db = new db();
		$sql="select * from tbl_tafels WHERE tafelnr = '$id'";
		$result = $db->conn->query($sql);
		return $result;
		}
		
		public function Delete($id)
		{
		$db = new db();
		$sql="DELETE FROM tbl_tafels WHERE tafelnr = '$id'";
		$db->conn->query($sql);
		echo $sql;
		}

		public function Update(){
		$db = new Db();
		$id= $_GET['id'];
			$sql = "UPDATE tbl_tafels 
			SET tafelnr = '".$db->conn->real_escape_string($this->m_iTafelnummer)."',
				restaurant_id = '". $_SESSION['restaurant_id'] ."',
				aantalpersonen = '".$db->conn->real_escape_string($this->m_iPersonen)."'
			WHERE tafelnr = $id";
			$db->conn->query($sql);
		}
	
	}
	
?>