<?php 
class Database{
	
	private $servername  = 'localhost';
    private $username  = 'root';
    private $password   = "";
    private $database  = "shop_db"; 
    
    public function getConnection(){		
		$con = new mysqli($this->servername, $this->username, $this->password, $this->database);
		if($con->connect_error){
			die("Error failed to connect to MySQL: " . $con->connect_error);
		} else {
			// echo "connected";
			return $con;
		}
    }
}

?>