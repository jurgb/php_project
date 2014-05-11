<?php
/* openingsuren class voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/
	include_once("Db.class.php");
	
	class Openingsuren
	{	
	
		private $m_iMaandag_opening_ochtend;
		private $m_iMaandag_sluiting_ochtend;
		private $m_iMaandag_opening_avond;
		private $m_iMaandag_sluiting_avond;

		private $m_iDinsdag_opening_ochtend;
		private $m_iDinsdag_sluiting_ochtend;
		private $m_iDinsdag_opening_avond;
		private $m_iDinsdag_sluiting_avond;

		private $m_iWoensdag_opening_ochtend;
		private $m_iWoensdag_sluiting_ochtend;
		private $m_iWoensdag_opening_avond;
		private $m_iWoensdag_sluiting_avond;

		private $m_iDonderdag_opening_ochtend;
		private $m_iDonderdag_sluiting_ochtend;
		private $m_iDonderdag_opening_avond;
		private $m_iDonderdag_sluiting_avond;

		private $m_iVrijdag_opening_ochtend;
		private $m_iVrijdag_sluiting_ochtend;
		private $m_iVrijdag_opening_avond;
		private $m_iVrijdag_sluiting_avond;

		private $m_iZaterdag_opening_ochtend;
		private $m_iZaterdag_sluiting_ochtend;
		private $m_iZaterdag_opening_avond;
		private $m_iZaterdag_sluiting_avond;

		private $m_iZondag_opening_ochtend;
		private $m_iZondag_sluiting_ochtend;
		private $m_iZondag_opening_avond;
		private $m_iZondag_sluiting_avond;
		
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Maandag_opening_ochtend":
					$this->m_iMaandag_opening_ochtend =$p_vValue;
					break;
				case "Maandag_sluiting_ochtend":
					$this->m_iMaandag_sluiting_ochtend =$p_vValue;
					break;
				case "Maandag_opening_avond":
					$this->m_iMaandag_opening_avond =$p_vValue;
					break;
				case "Maandag_sluiting_avond":
					$this->m_iMaandag_sluiting_avond =$p_vValue;
					break;

				case "Dinsdag_opening_ochtend":
					$this->m_iDinsdag_opening_ochtend =$p_vValue;
					break;
				case "Dinsdag_sluiting_ochtend":
					$this->m_iDinsdag_sluiting_ochtend =$p_vValue;
					break;
				case "Dinsdag_opening_avond":
					$this->m_iDinsdag_opening_avond =$p_vValue;
					break;
				case "Dinsdag_sluiting_avond":
					$this->m_iDinsdag_sluiting_avond =$p_vValue;
					break;

				case "Woensdag_opening_ochtend":
					$this->m_iWoensdag_opening_ochtend =$p_vValue;
					break;
				case "Woensdag_sluiting_ochtend":
					$this->m_iWoensdag_sluiting_ochtend =$p_vValue;
					break;
				case "Woensdag_opening_avond":
					$this->m_iWoensdag_opening_avond =$p_vValue;
					break;
				case "Woensdag_sluiting_avond":
					$this->m_iWoensdag_sluiting_avond =$p_vValue;
					break;

				case "Donderdag_opening_ochtend":
					$this->m_iDonderdag_opening_ochtend =$p_vValue;
					break;
				case "Donderdag_sluiting_ochtend":
					$this->m_iDonderdag_sluiting_ochtend =$p_vValue;
					break;
				case "Donderdag_opening_avond":
					$this->m_iDonderdag_opening_avond =$p_vValue;
					break;
				case "Donderdag_sluiting_avond":
					$this->m_iDonderdag_sluiting_avond =$p_vValue;
					break;

				case "Vrijdag_opening_ochtend":
					$this->m_iVrijdag_opening_ochtend =$p_vValue;
					break;
				case "Vrijdag_sluiting_ochtend":
					$this->m_iVrijdag_sluiting_ochtend =$p_vValue;
					break;
				case "Vrijdag_opening_avond":
					$this->m_iVrijdag_opening_avond =$p_vValue;
					break;
				case "Vrijdag_sluiting_avond":
					$this->m_iVrijdag_sluiting_avond =$p_vValue;
					break;

				case "Zaterdag_opening_ochtend":
					$this->m_iZaterdag_opening_ochtend =$p_vValue;
					break;
				case "Zaterdag_sluiting_ochtend":
					$this->m_iZaterdag_sluiting_ochtend =$p_vValue;
					break;
				case "Zaterdag_opening_avond":
					$this->m_iZaterdag_opening_avond =$p_vValue;
					break;
				case "Zaterdag_sluiting_avond":
					$this->m_iZaterdag_sluiting_avond =$p_vValue;
					break;

				case "Zondag_opening_ochtend":
					$this->m_iZondag_opening_ochtend =$p_vValue;
					break;
				case "Zondag_sluiting_ochtend":
					$this->m_iZondag_sluiting_ochtend =$p_vValue;
					break;
				case "Zondag_opening_avond":
					$this->m_iZondag_opening_avond =$p_vValue;
					break;
				case "Zondag_sluiting_avond":
					$this->m_iZondag_sluiting_avond =$p_vValue;
					break;
			}
		}
		
		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case "Maandag_opening_ochtend":
					return $this->m_iMaandag_opening_ochtend;
					break;
				case "Maandag_sluiting_ochtend":
					return $this->m_iMaandag_sluiting_ochtend;
					break;
				case "Maandag_opening_avond":
					return $this->m_iMaandag_opening_avond;
					break; 
				case "Maandag_sluiting_avond":
					return $this->m_iMaandag_sluiting_avond;
					break;

				case "Dinsdag_opening_ochtend":
					return $this->m_iDinsdag_opening_ochtend;
					break;
				case "Dinsdag_sluiting_ochtend":
					return $this->m_iDinsdag_sluiting_ochtend;
					break;
				case "Dinsdag_opening_avond":
					return $this->m_iDinsdag_opening_avond;
					break; 
				case "Dinsdag_sluiting_avond":
					return $this->m_iDinsdag_sluiting_avond;
					break; 

				case "Woensdag_opening_ochtend":
					return $this->m_iWoensdag_opening_ochtend;
					break;
				case "Woensdag_sluiting_ochtend":
					return $this->m_iWoensdag_sluiting_ochtend;
					break;
				case "Woensdag_opening_avond":
					return $this->m_iWoensdag_opening_avond;
					break; 
				case "Woensdag_sluiting_avond":
					return $this->m_iWoensdag_sluiting_avond;
					break; 

				case "Donderdag_opening_ochtend":
					return $this->m_iDonderdag_opening_ochtend;
					break;
				case "Donderdag_sluiting_ochtend":
					return $this->m_iDonderdag_sluiting_ochtend;
					break;
				case "Donderdag_opening_avond":
					return $this->m_iDonderdag_opening_avond;
					break; 
				case "Donderdag_sluiting_avond":
					return $this->m_iDonderdag_sluiting_avond;
					break; 

				case "Vrijdag_opening_ochtend":
					return $this->m_iVrijdag_opening_ochtend;
					break;
				case "Vrijdag_sluiting_ochtend":
					return $this->m_iVrijdag_sluiting_ochtend;
					break;
				case "Vrijdag_opening_avond":
					return $this->m_iVrijdag_opening_avond;
					break; 
				case "Vrijdag_sluiting_avond":
					return $this->m_iVrijdag_sluiting_avond;
					break; 

				case "Zaterdag_opening_ochtend":
					return $this->m_iZaterdag_opening_ochtend;
					break;
				case "Zaterdag_sluiting_ochtend":
					return $this->m_iZaterdag_sluiting_ochtend;
					break;
				case "Zaterdag_opening_avond":
					return $this->m_iZaterdag_opening_avond;
					break; 
				case "Zaterdag_sluiting_avond":
					return $this->m_iZaterdag_sluiting_avond;
					break; 

				case "Zondag_opening_ochtend":
					return $this->m_iZondag_opening_ochtend;
					break;
				case "Zondag_sluiting_ochtend":
					return $this->m_iZondag_sluiting_ochtend;
					break;
				case "Zondag_opening_avond":
					return $this->m_iZondag_opening_avond;
					break; 
				case "Zondag_sluiting_avond":
					return $this->m_iZondag_sluiting_avond;
					break; 
				
			}
		}
		
		
		public function Save()
		{
			//save user to database	
			$db = new Db();
			$sql1 = "INSERT INTO tbl_openingsuren (restaurant_id, maandag_opening_ochtend, maandag_sluiting_ochtend, maandag_opening_avond, maandag_sluiting_avond,
																 dinsdag_opening_ochtend, dinsdag_sluiting_ochtend, dinsdag_opening_avond, dinsdag_sluiting_avond,
																 woensdag_opening_ochtend, woensdag_sluiting_ochtend, woensdag_opening_avond, woensdag_sluiting_avond,
																 donderdag_opening_ochtend, donderdag_sluiting_ochtend, donderdag_opening_avond, donderdag_sluiting_avond,
																 vrijdag_opening_ochtend, vrijdag_sluiting_ochtend, vrijdag_opening_avond, vrijdag_sluiting_avond,
																 zaterdag_opening_ochtend, zaterdag_sluiting_ochtend, zaterdag_opening_avond, zaterdag_sluiting_avond,
																 zondag_opening_ochtend, zondag_sluiting_ochtend, zondag_opening_avond, zondag_sluiting_avond)
			VALUES ('".$_SESSION['restaurant_id']."',
					'".$db->conn->real_escape_string($this->m_iMaandag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iMaandag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iMaandag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iMaandag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iDinsdag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iDinsdag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iDinsdag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iDinsdag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iWoensdag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iWoensdag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iWoensdag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iWoensdag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iDonderdag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iDonderdag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iDonderdag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iDonderdag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iVrijdag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iVrijdag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iVrijdag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iVrijdag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iZaterdag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iZaterdag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iZaterdag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iZaterdag_sluiting_avond)."',
					'".$db->conn->real_escape_string($this->m_iZondag_opening_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iZondag_sluiting_ochtend)."',
					'".$db->conn->real_escape_string($this->m_iZondag_opening_avond)."',
					'".$db->conn->real_escape_string($this->m_iZondag_sluiting_avond)."'
					
			)";
				$db->conn->query($sql1);
				$openingsuren_id = $db->conn->insert_id;
				$_SESSION['openingsuren_id'] = $openingsuren_id;
			
			//echo "query is : " . "</br>" . $sql1;
		}

		public function getAll()
		{
		$db = new db();
		$sql="SELECT
		TIME_FORMAT(`maandag_opening_ochtend`,'%H:%i') AS maandag_opening_ochtend,
		TIME_FORMAT(`maandag_sluiting_ochtend`,'%H:%i') AS maandag_sluiting_ochtend,
		TIME_FORMAT(`maandag_opening_avond`,'%H:%i') AS maandag_opening_avond,
		TIME_FORMAT(`maandag_sluiting_avond`,'%H:%i') AS maandag_sluiting_avond,
		
		TIME_FORMAT(`dinsdag_opening_ochtend`,'%H:%i') AS dinsdag_opening_ochtend,
		TIME_FORMAT(`dinsdag_sluiting_ochtend`,'%H:%i') AS dinsdag_sluiting_ochtend,
		TIME_FORMAT(`dinsdag_opening_avond`,'%H:%i') AS dinsdag_opening_avond,
		TIME_FORMAT(`dinsdag_sluiting_avond`,'%H:%i') AS dinsdag_sluiting_avond,

		TIME_FORMAT(`woensdag_opening_ochtend`,'%H:%i') AS woensdag_opening_ochtend,
		TIME_FORMAT(`woensdag_sluiting_ochtend`,'%H:%i') AS woensdag_sluiting_ochtend,
		TIME_FORMAT(`woensdag_opening_avond`,'%H:%i') AS woensdag_opening_avond,
		TIME_FORMAT(`woensdag_sluiting_avond`,'%H:%i') AS woensdag_sluiting_avond,

		TIME_FORMAT(`donderdag_opening_ochtend`,'%H:%i') AS donderdag_opening_ochtend,
		TIME_FORMAT(`donderdag_sluiting_ochtend`,'%H:%i') AS donderdag_sluiting_ochtend,
		TIME_FORMAT(`donderdag_opening_avond`,'%H:%i') AS donderdag_opening_avond,
		TIME_FORMAT(`donderdag_sluiting_avond`,'%H:%i') AS donderdag_sluiting_avond,

		TIME_FORMAT(`vrijdag_opening_ochtend`,'%H:%i') AS vrijdag_opening_ochtend,
		TIME_FORMAT(`vrijdag_sluiting_ochtend`,'%H:%i') AS vrijdag_sluiting_ochtend,
		TIME_FORMAT(`vrijdag_opening_avond`,'%H:%i') AS vrijdag_opening_avond,
		TIME_FORMAT(`vrijdag_sluiting_avond`,'%H:%i') AS vrijdag_sluiting_avond,

		TIME_FORMAT(`zaterdag_opening_ochtend`,'%H:%i') AS zaterdag_opening_ochtend,
		TIME_FORMAT(`zaterdag_sluiting_ochtend`,'%H:%i') AS zaterdag_sluiting_ochtend,
		TIME_FORMAT(`zaterdag_opening_avond`,'%H:%i') AS zaterdag_opening_avond,
		TIME_FORMAT(`zaterdag_sluiting_avond`,'%H:%i') AS zaterdag_sluiting_avond,

		TIME_FORMAT(`zondag_opening_ochtend`,'%H:%i') AS zondag_opening_ochtend,
		TIME_FORMAT(`zondag_sluiting_ochtend`,'%H:%i') AS zondag_sluiting_ochtend,
		TIME_FORMAT(`zondag_opening_avond`,'%H:%i') AS zondag_opening_avond,
		TIME_FORMAT(`zondag_sluiting_avond`,'%H:%i') AS zondag_sluiting_avond

		from tbl_openingsuren WHERE restaurant_id = '".$_SESSION['restaurant_id']."' LIMIT 1";
		$result = $db->conn->query($sql);
		return $result;
		}


		public function getAllAsUser($dag)
		{
		$db = new db();
		$sql="SELECT
		`".$dag."_opening_ochtend` AS opening_ochtend,
		`".$dag."_sluiting_ochtend` AS sluiting_ochtend,
		`".$dag."_opening_avond` AS opening_avond,
		`".$dag."_sluiting_avond` AS sluiting_avond

		from tbl_openingsuren WHERE restaurant_id = '".$_SESSION['a_restaurant_id']."' LIMIT 1";
		$result = $db->conn->query($sql);
		return $result;
		}

		public function Update(){

		$db = new Db();
			$sql = "UPDATE tbl_openingsuren
			SET maandag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iMaandag_opening_ochtend)."',
				maandag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iMaandag_sluiting_ochtend)."',
				maandag_opening_avond = '".$db->conn->real_escape_string($this->m_iMaandag_opening_avond)."',
				maandag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iMaandag_sluiting_avond)."',
				dinsdag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iDinsdag_opening_ochtend)."',
				dinsdag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iDinsdag_sluiting_ochtend)."',
				dinsdag_opening_avond = '".$db->conn->real_escape_string($this->m_iDinsdag_opening_avond)."',
				dinsdag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iDinsdag_sluiting_avond)."',
				woensdag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iWoensdag_opening_ochtend)."',
				woensdag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iWoensdag_sluiting_ochtend)."',
				woensdag_opening_avond = '".$db->conn->real_escape_string($this->m_iWoensdag_opening_avond)."',
				woensdag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iWoensdag_sluiting_avond)."',
				donderdag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iDonderdag_opening_ochtend)."',
				donderdag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iDonderdag_sluiting_ochtend)."',
				donderdag_opening_avond = '".$db->conn->real_escape_string($this->m_iDonderdag_opening_avond)."',
				donderdag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iDonderdag_sluiting_avond)."',
				vrijdag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iVrijdag_opening_ochtend)."',
				vrijdag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iVrijdag_sluiting_ochtend)."',
				vrijdag_opening_avond = '".$db->conn->real_escape_string($this->m_iVrijdag_opening_avond)."',
				vrijdag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iVrijdag_sluiting_avond)."',
				zaterdag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iZaterdag_opening_ochtend)."',
				zaterdag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iZaterdag_sluiting_ochtend)."',
				zaterdag_opening_avond = '".$db->conn->real_escape_string($this->m_iZaterdag_opening_avond)."',
				zaterdag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iZaterdag_sluiting_avond)."',
				zondag_opening_ochtend = '".$db->conn->real_escape_string($this->m_iZondag_opening_ochtend)."',
				zondag_sluiting_ochtend = '".$db->conn->real_escape_string($this->m_iZondag_sluiting_ochtend)."',
				zondag_opening_avond = '".$db->conn->real_escape_string($this->m_iZondag_opening_avond)."',
				zondag_sluiting_avond = '".$db->conn->real_escape_string($this->m_iZondag_sluiting_avond)."'
				
			WHERE restaurant_id = '".$_SESSION['restaurant_id']."'";
			$db->conn->query($sql);
		}


	
	}
	
?>