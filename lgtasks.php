<?php
	/**
	* 
	*/
	class _Login
	{
		
		function __construct()
		{
        	include("config.php");
			$this->db_name = $dbname; 
	   		$this->db_user = $dbuser; 
	   		$this->db_pass = $dbpass;
	   		$this->db_host = $dbhost;			
		}
		//open a connection to the database. Make sure this is called on every page that needs to use the database.  
        public function connect() {  
            $connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass);  
            mysql_select_db($this->db_name);  
            return true;  
        }
        //takes a mysql row set and returns an associative array, where the keys  
        //in the array are the column names in the row set. If singleRow is set to  
        //true, then it will return a single row instead of an array of rows.  
        public function processRowSet($rowSet, $singleRow=false)  
        {  
            $resultArray = array();  
            while($row = mysql_fetch_assoc($rowSet))  
            {  
                array_push($resultArray, $row);  
            }  
      
            if($singleRow === true)  
                return $resultArray[0];  
      
            return $resultArray;  
        }

        public function login() 
        {
        	$this->user_name = $_GET["username"];
        	$this->passwd = $_GET["passwd"];

        	$sql = "SELECT usr_id, usr_name, usr_passwd FROM user";
        	$result = mysql_query($sql);
        	if(mysql_num_rows($result) > 0)
        		return $this->processRowSet($result, true); 

        	return $this->processRowSet($result);        	

        }
	}
?>