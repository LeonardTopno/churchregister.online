<?php
class State{
 
    // database connection and table name
    private $conn;
    private $table_name = "state";
    
    #Extra bit
    private $pageNo = 1;
	private  $no_of_records_per_page=30;
    
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
}

?>
