<?php
	/**
	* 
	*/
	class dbtasks
	{
		public server = 'localhost';
		public db = 'sportunleash';
		public user = 'root';
		public passwd = 'p3roo7';
		public dbconn;
		
		function __construct()
		{
			$this->dbconn = mysql_connect(this->server, $this->user, $this->passwd);
		}

		function __destruct(){
			mysql_close($this->dbconn);
		}

		function select($query){
			return mysql_query($query, $this->dbconn);
		}
	}
?>