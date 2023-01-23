<!DOCTYPE html>
<html>

<head> 

    <title>Users data</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

    <h1>Users data</h1>
    <hr/>
    <form method="post" action="">
    num_users : <input type="text" name="num_users" /><br/>
    register_date : <input type="text" name="register_date" /><br/>
    banned_users : <input type="text" name="banned_users" /><br/>
    <input type="submit" name="submit" value="Submit" />
    </form>

<?php

    if (isset($_POST["submit"])){
    
    if (isset($_POST['num_users'])&&isset($_POST['register_date'])&&isset($_POST['banned_users'])){
    $users = $_POST['num_users'];
    $date = $_POST['register_date'];
    $banned = $_POST['banned_users'];
    
    include "connection.php";
    $sql = "INSERT INTO special_info (num_users, register_date, banned_users) VALUES ('".$users."', '".$date."', '".$banned."')";
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
