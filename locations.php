<?php

    include 'functions/db_con.php';
    include 'functions/functions.php';

    $result = selectAllLocations();

    $count  = count($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet" />
    <title>Locations</title>
</head>
<body>
<header>
        <h1>All <?php echo $count; ?> locations from the database</h1>
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
    </header>
    <div id="container">
        <h2>Name</h2>
        <?php foreach($result as $row){ ?>
            <p class="locationName"><?php echo $row['name']; ?></p>
        <?php } ?>
    </div>
    <footer>&copy; Stijn Dusseldorp 2020</footer>
</body>
</html>