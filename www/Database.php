<?php
class Database {
    public $connection;
    public function __construct(){

        $dns = "mysql:host=contendor_mysql;port=3306;dbname=myapp;charset=utf8mb4";
        $this->connection = new PDO($dns, "daniel", "dsecret");

    }

    public function query($query){

        $statements = $this->connection -> prepare($query);
        $statements -> execute();
        return $statements;

    }
}