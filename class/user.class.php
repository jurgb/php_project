<?php
/* user class voor de aplicatie voor het project van PHP1

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
						throw new Exception("Wachtwoord niet lang genoeg.");	
					} else{
						$salt = '(#@!myrestosalt!@#)';
						$this->m_sPassword =md5($p_vValue.$salt);
					}
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
			}
		}
		
		public function Save()
		{
			//save user to database	
			$db = new Db();
			$sql = "INSERT INTO tbl_users (naam, voornaam, email, wachtwoord)
			VALUES ('".$db->conn->real_escape_string($this->m_sName)."',
					'".$db->conn->real_escape_string($this->m_sFirstname)."',
					'".$db->conn->real_escape_string($this->m_sEmail)."',
					'".$db->conn->real_escape_string($this->m_sPassword)."'
			)";
			$db->conn->query($sql);

			//user_id van de geregistreerde gebruiker in de session variabele opslaan
			$user_id = $db->conn->insert_id;
			$_SESSION['user_id'] = $user_id;
		}
		
		public function Login($p_sUsername, $p_sPassword)
		{
			$db = new Db();
			$salt = '(#@!myrestosalt!@#)';
			$sql = "SELECT * from tbl_users WHERE email = '".$db->conn->real_escape_string($p_sUsername)."' AND wachtwoord = '".$db->conn->real_escape_string(md5($p_sPassword.$salt))."';";
			
			$result = $db->conn->query($sql);
			$row = $result->fetch_assoc();	
			
			if($result->num_rows ==1)
			{

				session_start();
				$_SESSION['naam'] = $row['voornaam'];
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['loggedin'] = true;
				header('Location: dashboard.php');
			}
			else
			{
				throw new Exception("Username and/or password are invalid.");
			}
		}

		
	}
	
?>