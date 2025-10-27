<?php

/**
 * 
 * DATABASE CONNECTION
 * PDO - PHP Data Object
 * PHP Extension for connecting Database
 */
class Database{
    private string $db_host = "localhost";
    private string $db_user = "root";
    private string $db_pass = "";
    private string $db_name = "myprogram";
    private string $db_port = "3306";
    private PDO $db;

    /**
     * Create a DB connection
     */
    public function connect(): PDO|null{
        try{
            // Data Source Name
            $dsn = "mysql:host=$this->db_host;port=$this->db_port;dbname=$this->db_name";
            $this->db = new PDO($dsn,$this->db_user,$this->db_pass);
            //Attributes throw error
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // associative array 
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            die("". $e->getMessage());
        }
        return $this->db;
    }
}