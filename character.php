<?php

    include 'db_con.php';

        
    $stmt = "SELECT * FROM characters WHERE id='{$_GET['charId']}'";
    $stmt = $pdo->prepare($stmt);
    $stmt->execute();
    $result = $stmt->fetchAll();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo  $result[0]['name']  ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo  $result[0]['name']  ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo  $result[0]['avatar']  ?>">
            <div class="stats" style="background-color: <?php echo  $result[0]['color']  ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo  $result[0]['health']  ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo  $result[0]['attack']  ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo  $result[0]['defense']  ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo  $result[0]['weapon']  ?></li>
                    <li><b>Armor</b>: <?php echo  $result[0]['armor']  ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
            <?php echo  $result[0]['bio']  ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Stijn Dusseldorp 2020</footer>
</body>
</html>