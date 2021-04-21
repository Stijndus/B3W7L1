<?php

    include 'functions/db_con.php';
    include 'functions/functions.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $location = $_POST['addLoc'];
        addLocation($location);
        header("Location: locations.php?added=$location");
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
    <title>Add locations</title>
</head>

<body>
    <header>
        <h1>Add location</h1>
        <a class="backbutton" href="locations.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
    </header>
    <div id="container">
        <form method="POST" action=""> 
            <label>Name:</label>
            <input name="addLoc" type="text" placeholder="Example" autocomplete="off">
            <input type="submit" value="Add"></button>
        </form>
    </div>
    <footer>&copy; Stijn Dusseldorp 2020</footer>
</body>

</html>