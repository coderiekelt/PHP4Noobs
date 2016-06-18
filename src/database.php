<?php
namespace PHP4Noobs;

class Database {
	private $connection;
	
	public function __construct($host = "none", $username = "none", $password = "none", $database = "none", $port=3306)
	{
		if ($host != "none")
		{
			$this->connect($host, $username, $password, $database, $port);
		}
	}
	
	public function connect($host, $username, $password, $database, $port=3306)
	{
		$this->connection = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname='. $database, $username, $password);
	}
	
	public function insert($table, $columns, $values)
	{
		$query = $this->connection->prepare("INSERT INTO `" . $table . "` (" . $columns . ") VALUES (" . $values . ")");
		$query->execute();
		return true;
	}
	
	public function fetchArray($table)
	{
		$query = $this->connection->prepare("SELECT * FROM `" . $table . "`");
		return $query->fetchAll();
	}
	
	public function fetchAssoc($table, $where)
	{
		$query = $this->connection->prepare("SELECT * FROM `" . $table . "` WHERE " . $where);
		return $query->fetch(\PDO::FETCH_ASSOC);
	}
	
	public function close()
	{
		$this->connection = null;
	}
}