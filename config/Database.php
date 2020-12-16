<?php
class Database{
	
	private $host  = 'sql12.freemysqlhosting.net';
    private $user  = 'sql12381650';
    private $password   = "AcbcLhuB5u";
    private $database  = "sql12381650"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>