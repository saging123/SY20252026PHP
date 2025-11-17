<?php

/**
 * PDO - PHP Data Object
 * 
 */
class DatabaseConnector{
    private PDO $db;
    private string $driver = "mysql";
    private string $host;
    private string $port;
    private string $username;
    private string $password;
    private string $database;


    public function __construct(array $config){
        $this->host = $config["host"];
        $this->port = $config["port"];
        $this->username = $config["username"];
        $this->password = $config["password"];
        $this->database = $config["dbname"];

      
    }
    public function connect(): PDO | null{
        try{
            // DSN - Data Source Name
            $dsn = "$this->driver:host=$this->host;port=$this->port;dbname=$this->database";
            $this->db = new PDO($dsn, $this->username, $this->password);
        }catch(PDOException $e){
            die("Error Occured: ". $e->getMessage());
        }
        return $this->db;
    }


}