<?php 

    function selectAll(){
        $pdo = dbCon();
        $stmt = "SELECT * FROM `characters` ORDER BY `name`";
        $stmt = $pdo->prepare($stmt);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }


    function selectSolo($id){
        $pdo = dbCon();
        $stmt = "SELECT * FROM `characters` WHERE id=:id";
        $result = $pdo->prepare($stmt);
        $result->bindParam(':id', $id);
        $result->execute();
        $result = $result->fetch();
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