<?php
define("DB_HOST", "localhost");
define("DB_NAME", "pollapp");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");
class DbConnection{
	private $pdo = null;
	private $stmt = null;
	public $error = "";
	public $connection;

   public function __construct(){
	
		try {
			$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
			$pdo = new PDO($dsn,DB_USER,DB_PASSWORD);
			return  $this->connection = $pdo;
		} catch (PDOException $ex) {
			echo 'Error!, Connection to database failed: '.$ex->getMessage();
		}
		
	}
	
	function __destruct(){
		if ($this->stmt !== null) {
			$this->stmt = null;
		}
		if ($this->pdo !== null) {
			$this->pdo = null;
		}
	}
}
// new DbConnection;
?>