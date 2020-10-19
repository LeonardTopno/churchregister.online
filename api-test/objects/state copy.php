<?php
class State{
 
    // database connection and table name
    private $conn;
    private $table_name = "state";
    
    #private $pageNo = 1;
	#private  $no_of_records_per_page=30;
    
    // object properties
    public $state_id;
    public $country_id;
    public $state_name;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
	
	// read state
	function read(){
		if(isset($_GET["pageNo"])){
		$this->pageNo=$_GET["pageNo"];
		}
		$offset = ($this->pageNo-1) * $this->no_of_records_per_page; 
		// select all query
		$query = "SELECT  t.* FROM ". $this->table_name ." t  LIMIT ".$offset." , ". $this->no_of_records_per_page."";
	 
		// prepare query statement
		$stmt = $this->conn->prepare($query);
	 
		// execute query
		$stmt->execute();
	 
		return $stmt;
	}
	
	// create state
	function create(){
	 
		// query to insert record
		$query ="INSERT INTO ".$this->table_name." SET user_login=:user_login,user_pass=:user_pass,user_nicename=:user_nicename,user_email=:user_email,user_url=:user_url,user_registered=:user_registered,user_activation_key=:user_activation_key,user_status=:user_status,display_name=:display_name";

		// prepare query
		$stmt = $this->conn->prepare($query);
	 
		// sanitize
		
$this->user_login=htmlspecialchars(strip_tags($this->user_login));
$this->user_pass=htmlspecialchars(strip_tags($this->user_pass));
$this->user_nicename=htmlspecialchars(strip_tags($this->user_nicename));
$this->user_email=htmlspecialchars(strip_tags($this->user_email));
$this->user_url=htmlspecialchars(strip_tags($this->user_url));
$this->user_registered=htmlspecialchars(strip_tags($this->user_registered));
$this->user_activation_key=htmlspecialchars(strip_tags($this->user_activation_key));
$this->user_status=htmlspecialchars(strip_tags($this->user_status));
$this->display_name=htmlspecialchars(strip_tags($this->display_name));
	 
		// bind values
		
$stmt->bindParam(":user_login", $this->user_login);
$stmt->bindParam(":user_pass", $this->user_pass);
$stmt->bindParam(":user_nicename", $this->user_nicename);
$stmt->bindParam(":user_email", $this->user_email);
$stmt->bindParam(":user_url", $this->user_url);
$stmt->bindParam(":user_registered", $this->user_registered);
$stmt->bindParam(":user_activation_key", $this->user_activation_key);
$stmt->bindParam(":user_status", $this->user_status);
$stmt->bindParam(":display_name", $this->display_name);
	 
		// execute query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
		 
	}
	
	// used when filling up the update state form
	function readOne(){
	 
		// query to read single record
		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t.ID = ? LIMIT 0,1";
	 
		// prepare query statement
		$stmt = $this->conn->prepare( $query );
	 
		// bind id of product to be updated
		$stmt->bindParam(1, $this->ID);
	 
		// execute query
		$stmt->execute();
	 
		// get retrieved row
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	 
		// set values to object properties
		
$this->ID = $row['ID'];
$this->user_login = $row['user_login'];
$this->user_pass = $row['user_pass'];
$this->user_nicename = $row['user_nicename'];
$this->user_email = $row['user_email'];
$this->user_url = $row['user_url'];
$this->user_registered = $row['user_registered'];
$this->user_activation_key = $row['user_activation_key'];
$this->user_status = $row['user_status'];
$this->display_name = $row['display_name'];
	}
	
	function login($username,$password){
	 
		// query to read single record
		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t.user_login = ? AND t.user_pass = ? LIMIT 0,1";
	 
		// prepare query statement
		$stmt = $this->conn->prepare( $query );
	 
		// bind id of product to be updated
		$stmt->bindParam(1, $username);
	 $stmt->bindParam(2, $password);
		// execute query
		$stmt->execute();
	 
		// get retrieved row
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	 
		// set values to object properties
		
$this->ID = $row['ID'];
$this->user_login = $row['user_login'];
$this->user_pass = $row['user_pass'];
$this->user_nicename = $row['user_nicename'];
$this->user_email = $row['user_email'];
$this->user_url = $row['user_url'];
$this->user_registered = $row['user_registered'];
$this->user_activation_key = $row['user_activation_key'];
$this->user_status = $row['user_status'];
$this->display_name = $row['display_name'];
	}
	
	// update the state
	function update(){
	 
		// update query
		$query ="UPDATE ".$this->table_name." SET user_login=:user_login,user_pass=:user_pass,user_nicename=:user_nicename,user_email=:user_email,user_url=:user_url,user_registered=:user_registered,user_activation_key=:user_activation_key,user_status=:user_status,display_name=:display_name WHERE ID = :ID";
	 
		// prepare query statement
		$stmt = $this->conn->prepare($query);
	 
		// sanitize
		
$this->user_login=htmlspecialchars(strip_tags($this->user_login));
$this->user_pass=htmlspecialchars(strip_tags($this->user_pass));
$this->user_nicename=htmlspecialchars(strip_tags($this->user_nicename));
$this->user_email=htmlspecialchars(strip_tags($this->user_email));
$this->user_url=htmlspecialchars(strip_tags($this->user_url));
$this->user_registered=htmlspecialchars(strip_tags($this->user_registered));
$this->user_activation_key=htmlspecialchars(strip_tags($this->user_activation_key));
$this->user_status=htmlspecialchars(strip_tags($this->user_status));
$this->display_name=htmlspecialchars(strip_tags($this->display_name));
$this->ID=htmlspecialchars(strip_tags($this->ID));
	 
		// bind new values
		
$stmt->bindParam(":user_login", $this->user_login);
$stmt->bindParam(":user_pass", $this->user_pass);
$stmt->bindParam(":user_nicename", $this->user_nicename);
$stmt->bindParam(":user_email", $this->user_email);
$stmt->bindParam(":user_url", $this->user_url);
$stmt->bindParam(":user_registered", $this->user_registered);
$stmt->bindParam(":user_activation_key", $this->user_activation_key);
$stmt->bindParam(":user_status", $this->user_status);
$stmt->bindParam(":display_name", $this->display_name);
$stmt->bindParam(":ID", $this->ID);
	 
		// execute the query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	// delete the state
	function delete(){
	 
		// delete query
		$query = "DELETE FROM " . $this->table_name . " WHERE ID = ? ";
	 
		// prepare query
		$stmt = $this->conn->prepare($query);
	 
		// sanitize
		$this->id=htmlspecialchars(strip_tags($this->ID));
	 
		// bind id of record to delete
		$stmt->bindParam(1, $this->ID);
	 
		// execute query
		if($stmt->execute()){
			return true;
		}
	 
		return false;
		 
	}
}


?>
