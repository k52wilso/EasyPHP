<?php

	class DBconnect {
		private $connection ; // to connect to MySQL
		private $tableToConnect;
		private $dbName ;
		private $dbPassword ;
		private $dbUser ;

		/*Connect to db passing */
		function __construct ($dbName){
			$this->dbName = $dbName;
		}

		//Function: connect to database
		function connect(){

		}


		//Function : Get data from database
		//Parameter : -table to access
		//			  - id (blank string if not needed)
		function get(table,id) {

		}

		//Function : Send data to database
		//Parameter : An array containing information (such as an id or multiple ids) to update
		function post(array) {

		}
	}

?>
