<?php

    include 'functions/db_con.php';
    include 'functions/functions.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        removeLocation($_POST['remLoc']);
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
        <h1>Remove location</h1>
        <a class="backbutton" href="locations.php"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
    </header>
    <div id="container">
        <form method="POST" action="">
            <label>Delete</label>
            <select name="remLoc">
                <option value="" selected disabled hidden>Choose here</option>
                <?php foreach(selectAllLocations() as $location){?>
                <option value="<?php echo $location['id'];?>"><?php echo $location['name'];?></option>
                <?php }?>
            </select>
            <input type="submit" value="Delete">
        </form>
    </div>
    <footer>&copy; Stijn Dusseldorp 2020</footer>
</body>

</html>