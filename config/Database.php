<?php

namespace Config{
    class Database{
        static function getConnection(){
            $host = "localhost";
            $dbname = "belajar_php_database";
            $username = "root";
            $password = "hrnmysql";
            
            return new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }
    }
}

