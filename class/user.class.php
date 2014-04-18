<?php
/* css pagina voor de aplicatie voor het project van PHP1

Developers: Jurgen barbier
			Tijs Vervoort
			Rob Rijken
			Jeroen Dom
*/
	include_once("Db.class.php");
	
	class User
	{	
	
		private $m_sName;
		private $m_sFirstname;
		private $m_sEmail;
		private $m_sPassword;
		private $m_sRestaurant;
		private $m_sAdres;
		private $m_iPostcode;
		
		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty){
				case "Name":
					$this->m_sName =$p_vValue;
					break;
				case "Firstname":
					$this->m_sFirstname =$p_vValue;
					break;
				case "Email":
					$this->m_sEmail =$p_vValue;
					break;
				
				case "Password":
					if(strlen($p_vValue) < 5)
					{
						throw new Exception("Password not long enough.");	
					}
					$salt = '(#@!myrestosalt!@#)';
					$this->m_sPassword =md5($p_vValue.$salt);
					break;
				case 'Restaurant':
					$this->m_sRestaurant = $p_vValue;
					break;
				case 'Adres':
					$this->m_sAdres = $p_vValue;
					break;
				case 'Postcode':
					$this->m_iPostcode = $p_vValue;
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
				case "firstname":
					return $this->m_sFirstname;
					break;
				case "Email":
					return $this->m_sEmail;
					break; 
				case "Password":
					return $this->m_sPassword;
					break;
				case 'Restaurant':
					return $this->m_sRestaurant;
					break;
				case 'Adres':
					return $this->m_sAdres;
					break;
				case 'Postcode':
					return $this->m_iPostcode;
					break;
			}
		}
		
		public function Save()
		{
			//save user to database	
			$db = new Db();
			$sql = "INSERT INTO tblusers (naam, voornaam, email, wachtwoord, restaurantnaam, adres, postcode)
			VALUES ('".$db->conn->real_escape_string($this->m_sName)."',
					'".$db->conn->real_escape_string($this->m_sFirstname)."',
					'".$db->conn->real_escape_string($this->m_sEmail)."',
					'".$db->conn->real_escape_string($this->m_sPassword)."',
					'".$db->conn->real_escape_string($this->m_sRestaurant)."',
					'".$db->conn->real_escape_string($this->m_sAdres)."',
					'".$db->conn->real_escape_string($this->m_iPostcode)."'
			)";
			$db->conn->query($sql);
			echo "query is : " . "</br>" . $sql;
		}
		
		public function Login($p_sUsername, $p_sPassword)
		{
			$db = new Db();
			$salt = '(#@!myrestosalt!@#)';
			$sql = "SELECT * from tblusers WHERE email = '".$db->conn->real_escape_string($p_sUsername)."' AND wachtwoord = '".$db->conn->real_escape_string(md5($p_sPassword.$salt))."';";
			
			$result = $db->conn->query($sql);
			
			if($result->num_rows ==1)
			{
				session_start();
				/*$_SESSION['username'] = $u->Email;
				$_SESSION['naam'] = $u->Name . " " . $u->Firstname;
				$_SESSION['loggedinPassword'] = $u->Password;*/
				$_SESSION['loggedin'] = true;
				header('Location: reservaties.php');
			}
			else
			{
				throw new Exception("Username and/or password are invalid.");
			}	
		}
	}
	
?>