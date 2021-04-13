<?php

    include 'db_con.php';

        
    $stmt = 'SELECT * FROM characters ORDER BY `name`';
    $stmt = $pdo->prepare($stmt);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $stmt = 'SELECT COUNT(*) AS aantal FROM characters ';
    $stmt = $pdo->prepare($stmt);
    $stmt->execute();
    $count = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>Alle <?php echo $count[0]['aantal'] ?> characters uit de database</h1>

    </header>
    <div id="container">
        <?php   foreach($result as $row){ ?>
        <a class="item" href="character.php?charId=<?php echo $row['id'] ?>">
            <div class="left">
                <img class="avatar" src="resources/images/<?php echo $row['avatar'] ?>">
            </div>
            <div class="right">
                <h2><?php echo $row['name'] ?></h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $row['health'] ?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $row['attack'] ?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $row['defense'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a>
        <?php } ?>
    </div>
    <footer>&copy; Stijn Dusseldorp 2020</footer>
</body>

</html>