<?php 

    function selectAll($table){
        $pdo = dbCon();

        $stmt = "SELECT * FROM `:table` ORDER BY `name`";
        $stmt = $pdo->prepare($stmt);
        $stmt->bindParam(':table', $table);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


    function selectSolo($table, $id){
        $pdo = dbCon();

        $stmt = "SELECT * FROM ':table' WHERE id=':id'";
        $stmt = $pdo->prepare($stmt);
        $stmt->bindParam(':table', $table);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    function selectAllLocations(){
        $pdo = dbCon();
    
        $stmt = "SELECT * FROM `locations`";
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function update($loc, $id){
        $pdo = dbCon();

        $stmt = "UPDATE characters SET location=:locations WHERE id=:id";
        $stmt = $pdo->prepare($stmt);
        $stmt->bindParam(':locations', $loc);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }


?>