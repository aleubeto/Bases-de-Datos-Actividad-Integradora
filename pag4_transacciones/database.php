<?php
	class DB {
		private static $dbName 			= '2005B_02';
		private static $dbHost 			= 'localhost';
		private static $dbUsername 		= 'u2005_02';
		private static $dbUserPassword 	= 'VGn@iauI#ZR5';
		private static $cont  = null;

		public function __construct() {
			exit('Init function is not allowed');
		}
		public static function connect(){
		   // One connection through whole application
	    	if ( null == self::$cont ) {
		    	try {
		        	self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
		        }
		        catch(PDOException $e) {
		        	die($e->getMessage());
		        }
	       	}
	       	return self::$cont;
		}
		public static function disconnect() {
			self::$cont = null;
		}
	}
?>
