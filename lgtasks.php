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
        public function login() 
        {
        	$this->user_name = $_GET["username"];
        	$this->passwd = $_GET["passwd"];

        	$sql = "SELECT usr_id, usr_name, usr_passwd FROM user";

        }
	}
?>