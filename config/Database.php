<?php
class Database{
	
	private $host  = 'localhost';
    private $user  = 'id16643964_sql12381650';
    private $password   = "lgm4[>)}]jT8n=CQ";
    private $database  = "id16643964_sqlhosted"; 
    
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