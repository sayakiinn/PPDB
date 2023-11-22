<?php

class Database {
    private $db host;
    private $db_user;
    private $db_password;
    private $db_name;
    protected $connection;

    function_construct()
    {
        $this->db_host = Config::$db_host;
        $this->db_user = Config::$db_user;
        $this->db_password = Config::$db_password;
        $this->db_name = Config::$db_name;

        $this->get_connect();
    }

    private function get_connect(){
        try {
            $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    // Get Data Form Table
    function select($sql){
        try {
            $cmd = Sthis->connection->prepare($sql);
            $cmd->execute();
            return $cmd->fetchAll();
        } catch(PDOException Serr){
            return [];
        }
    }

    // Execute SOL
    function query($sql){
        try {
            $cmd = $this->connection->exec($sql);

            return true;
        } catch(PDOException $err){
            return false;
        }
    }

    function__destruct()
    {
        $this->connection = null;
    }
}


