<?php
/* reservatie class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/

class reservatie
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
			include_once('Db.class.php');
			//save user to database	
			$db = new Db();
			$sql = "INSERT INTO tblreservaties (naam, personen, datum, uur, tafel)
			VALUES ('".$db->conn->real_escape_string($this->m_sName)."',
					'".$db->conn->real_escape_string($this->m_iPersonen)."',
					'".$db->conn->real_escape_string($this->m_dDate)."',
					'".$db->conn->real_escape_string($this->m_iUur)."',
					'".$db->conn->real_escape_string($this->m_iTable)."'
			)";
			$db->conn->query($sql);
			echo "query is : " . "</br>" . $sql;
		}
}
?>