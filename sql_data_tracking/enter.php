<!DOCTYPE html>
<html>

<head> 

    <title>User activity</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

    <h1>User activity</h1>
    <hr/>
    <form method="post" action="">
    post_nums : <input type="text" name="post_nums" /><br/>
    comments : <input type="text" name="comments" /><br/>
    pictures : <input type="text" name="pictures" /><br/>
    <input type="submit" name="submit" value="Submit" />
    </form>

<?php

    if (isset($_POST["submit"])){
    
    if (isset($_POST['post_nums'])&&isset($_POST['comments'])&&isset($_POST['pictures'])){
    $posts = $_POST['post_nums'];
    $comms = $_POST['comments'];
    $pics = $_POST['pictures'];
    
    include "connection.php";
    $sql = "INSERT INTO data_tracking (post_nums, comments, pictures) VALUES ('".$posts."', '".$comms."', '".$pics."')";
    if ($mysqli->query($sql)){
    echo "<p>Data entered.</p>";
    } else {
    echo "<p>Something went wrong.</p>" . $mysqli->error;
    }
    } else {
    echo "No data entered.";
    }
    $mysqli->close();
    }

?>

</body>

</html>
