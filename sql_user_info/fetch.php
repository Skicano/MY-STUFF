<!DOCTYPE html>
<html>

<head>

    <title>Get user info</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<?php

    include "connection.php";
    $sql="SELECT first_name, last_name, email, username, from, sex, own, info 
    FROM user_info ORDER BY id DESC";

    if (!$q=$mysqli->query($sql)){
    echo "<p>Query not valid.</p>" . mysqli_query($naslov, $opis);
    exit();
    }
    if ($q->num_rows==0){
    echo "NO user info.";
    } else {
    ?>
    
    <table>
    <tr>
    <td><b>First</b></td>
    <td><b>Last</b></td>
    <td><b>Email</b></td>
    <td><b>Username</b></td>
    <td><b>From</b></td>
    <td><b>Sex</b></td>
    <td><b>Own</b></td>
    <td><b>Info</b></td>
    </tr>

    <?php
    while ($red=$q->fetch_object()){
    ?>
    
    <tr>
    <td><?php echo $red->first; ?></td>
    <td><?php echo $red->last; ?></td>
    <td><?php echo $red->email; ?></td>
    <td><?php echo $red->username; ?></td>
    <td><?php echo $red->from; ?></td>
    <td><?php echo $red->sex; ?></td>
    <td><?php echo $red->own; ?></td>
    <td><?php echo $red->info; ?></td>
    </tr>
    
    <?php
    }
    ?>
    </table>
    <?php
    }
    $mysqli->close();

?>

</body>

</html>
