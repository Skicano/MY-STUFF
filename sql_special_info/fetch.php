<!DOCTYPE html>
<html>

<head>

    <title>Fetch user data</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<body>

<?php

    include "connection.php";
    $sql="SELECT num_users, register_date, banned_users FROM special_info ORDER BY id DESC";
    if (!$q=$mysqli->query($sql)){
    echo "<p>Query not valid.</p>" . mysqli_query($users, $date, $banned);
    exit();
    }
    if ($q->num_rows==0){
    echo "No user data.";
    } else {
    ?>
    <table>
    <tr>
    <td><b>Number of users</b></td>
    <td><b>Dates of registration</b></td>
    <td><b>Banned users</b></td>
    </tr>
    <?php
    while ($red=$q->fetch_object()){
    ?>
    <tr>
    <td><?php echo $red->users; ?></td>
    <td><?php echo $red->date; ?></td>
    <td><?php echo $red->banned; ?></td>
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
