<!DOCTYPE html>
<html>

<head>

    <title>Fetch user activity</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<body>

<?php

    include "connection.php";
    $sql="SELECT post_nums, comments, pictures FROM data_tracking ORDER BY id DESC";
    if (!$q=$mysqli->query($sql)){
    echo "<p>Query not valid.</p>" . mysqli_query($posts, $comms, $pics);
    exit();
    }
    if ($q->num_rows==0){
    echo "No user activity.";
    } else {
    ?>
    <table>
    <tr>
    <td><b>Number of posts</b></td>
    <td><b>Number of comments</b></td>
    <td><b>Number of pictures</b></td>
    </tr>
    <?php
    while ($red=$q->fetch_object()){
    ?>
    <tr>
    <td><?php echo $red->posts; ?></td>
    <td><?php echo $red->comms; ?></td>
    <td><?php echo $red->pics; ?></td>
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
