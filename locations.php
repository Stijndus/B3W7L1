<?php

    include 'functions/db_con.php';
    include 'functions/functions.php';

    $result = selectAllLocations();

    $count  = count($result);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $locationNames = removeLocation($_POST['location']);
        header("Location: locations.php?deleted=$locationNames");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet" />
    <title>Locations</title>
</head>

<body>
    <header>
        <h1>All <?php echo $count; ?> locations from the database</h1>
        <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
    </header>
    <div id="container">
        <h2>Name</h2>
        <?php if(!empty($_GET['added'])){?>
            <h4 style='color: limegreen;'>'<?php echo $_GET['added'];?>' added succesfully!</h4>
        <?}if(!empty($_GET['deleted'])){?>
            <h4 style='color: red;'>'<?php echo $_GET['deleted'];?>' deleted succesfully!</h4>
        <?php }?>
        <form method="POST" action='' onsubmit="return confirm('Are you sure that you want to delete these locations?')">
            <?php foreach($result as $row){ ?>
            <input type="checkbox" name="location[]" value="<?php echo $row['name'] ?>"><p class="locationName"><?php echo $row['name']; ?></p>
            <?php } ?>
            <input class="delete" type="submit" value="Delete">
        </form>

        <a href="create.php"><i class="fas fa-plus-square"></i> Add location</a>
    </div>

    <footer>&copy; Stijn Dusseldorp 2021</footer>
</body>

</html>