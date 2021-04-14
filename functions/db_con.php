<?php
    
    function dbCon(){
        $dsn = "mysql:host=localhost;dbname=characters";
        $user = "root";
        $passwd = "mysql";
        $pdo = new PDO($dsn, $user, $passwd);
        return $pdo;
    }
?>