<?php

class Database {
    static $host, $user, $password, $database;

    function __construct($host='localhost', $user='root', $password='', $database='bookgym')
    {
        self::$host=$host;
        self::$user=$user;
        self::$password=$password;
        self::$database=$database;
    }

    function connect(){
        $connection = mysqli_connect(self::$host, self::$user, self::$password, self::$database);
        if($connection){
            return $connection;
        }else{
            return die('Connection error!');
        }
    }

    function query($q=""){
        return mysqli_query($this->connect(), $q);
    }

    function beginTransaction2(){
        return $this->connect()->begin_Transaction();
    }

    function commit2(){
        return $this->connect()->commit();
    }

    function rollback2(){
        return $this->connect()->rollback();
    }
}
