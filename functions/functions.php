<?php 

    function selectAll($table){
        global $stmt;
        global $pdo;

        $stmt = "SELECT * FROM `{$table}` ORDER BY `name`";
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function Amount($column, $name, $table){
        global $stmt;
        global $pdo;

        $stmt = "SELECT COUNT({$column}) AS {$name} FROM {$table} ";
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        $count = $stmt->fetchAll();
        return $count[0]["{$name}"];
    }

    function selectSolo($table, $id){
        global $stmt;
        global $pdo;

        $stmt = "SELECT * FROM {$table} WHERE id='{$id}'";
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

?>