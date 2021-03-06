<?php
/* reservatie class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/

include_once('Db.class.php');

class Reservatie
{

	private $m_sName;
	private $m_iPersonen;
	private $m_dDate;
	private $m_iUur;
	private $m_iTable;

	public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Name":
					$this->m_sName =$p_vValue;
					break;
				case "Table":
					$this->m_iTable =$p_vValue;
					break;
				case "Date":
					$this->m_dDate =$p_vValue;
					break;
				case "Uur":
					$this->m_iUur =$p_vValue;
					break;
				case "Personen":
					$this->m_iPersonen =$p_vValue;
					break;
			}
		}

	public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Name":
					return $this->m_sName;
					break;
				case "Table":
					return $this->m_iTable;
					break;
				case "Date":
					return $this->m_dDate;
					break;
				case "Uur":
					return $this->m_iUur;
					break;
				case "Personen":
					return $this->m_iPersonen;
					break;
			}
		}
		
	public function Save()
		{
			//save user to database	
			$db = new Db();
			$id = $_SESSION['restaurant_id'];
			$sql = "INSERT INTO tbl_reservaties (klantnaam, aantalpersonen, datum, uur, tafel_id)
			VALUES ('".$db->conn->real_escape_string($this->m_sName)."',
					'".$db->conn->real_escape_string($this->m_iPersonen)."',
					STR_TO_DATE('".$db->conn->real_escape_string($this->m_dDate)."', '%e-%m-%Y'),
					'".$db->conn->real_escape_string($this->m_iUur)."',
					(SELECT tafel_id FROM tbl_tafels WHERE tafelnr = ".$db->conn->real_escape_string($this->m_iTable)." AND restaurant_id = $id
			))";
			$db->conn->query($sql);
			
		}

	public function SaveAsUser()
		{
			//save user to database	
			$db = new Db();
			$id = $_SESSION['a_restaurant_id'];
			$sql = "INSERT INTO tbl_reservaties (klantnaam, aantalpersonen, datum, uur, tafel_id)
			VALUES ('".$db->conn->real_escape_string($this->m_sName)."',
					'".$db->conn->real_escape_string($this->m_iPersonen)."',
					STR_TO_DATE('".$db->conn->real_escape_string($this->m_dDate)."', '%e-%m-%Y'),
					'".$db->conn->real_escape_string($this->m_iUur)."',
					(SELECT tafel_id FROM tbl_tafels WHERE tafelnr = ".$db->conn->real_escape_string($this->m_iTable)." AND restaurant_id = $id
			))";
			$db->conn->query($sql);
			
		}

	public function getAll()
		{
		$db = new db();
		$id = $_SESSION['restaurant_id'];
		$sql="SELECT reservatieid, klantnaam, tbl_reservaties.aantalpersonen, DATE_FORMAT(`datum`,'%e-%m-%Y') AS datum, TIME_FORMAT(`uur`,'%H:%i') AS uur, tbl_tafels.tafelnr FROM tbl_reservaties, tbl_tafels WHERE tbl_reservaties.tafel_id = tbl_tafels.tafel_id AND tbl_tafels.restaurant_id = $id";
		$result = $db->conn->query($sql);
		return $result;

		}

	public function getById($id)
		{
		$db = new db();
		$sql="SELECT klantnaam, tbl_reservaties.aantalpersonen, DATE_FORMAT(`datum`,'%e-%m-%Y') AS datum, TIME_FORMAT(`uur`,'%H:%i') AS uur, tbl_tafels.tafelnr FROM tbl_reservaties, tbl_tafels WHERE reservatieid = '$id' AND tbl_reservaties.tafel_id = tbl_tafels.tafel_id";
		$result = $db->conn->query($sql);
		return $result;
		}

	public function getByDate($res_datum)
		{
		$db = new db();
		$sql="SELECT klantnaam, tafel_id, DATE_FORMAT(`datum`,'%e-%m-%Y') AS datum, TIME_FORMAT(`uur`,'%H:%i') AS uur FROM tbl_reservaties WHERE datum = STR_TO_DATE('".$res_datum."','%e-%m-%Y')";
		$result = $db->conn->query($sql);
		return $result;
		}

	public function Delete($id)
		{
		$db = new db();
		$sql="DELETE FROM tbl_reservaties WHERE reservatieid = '$id'";
		$db->conn->query($sql);
		}


	public function Update(){
		$db = new Db();
		$id= $_GET['id'];
		$resto_id = $_SESSION['restaurant_id'];
			$sql = "UPDATE tbl_reservaties 
			SET klantnaam = '".$db->conn->real_escape_string($this->m_sName)."',
				aantalpersonen = '".$db->conn->real_escape_string($this->m_iPersonen)."',
				datum = STR_TO_DATE('".$db->conn->real_escape_string($this->m_dDate)."', '%e-%m-%Y'),
				uur = '".$db->conn->real_escape_string($this->m_iUur)."',
				tafel_id = (SELECT tafel_id FROM tbl_tafels WHERE tafelnr = ".$db->conn->real_escape_string($this->m_iTable)." AND restaurant_id = $resto_id
			)
			WHERE reservatieid = $id";
			$db->conn->query($sql);
	}

}
?>