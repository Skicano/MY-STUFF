<!DOCTYPE html>
<html>

<head>

    <title>Delete and change user e-mail</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

<?php

    include "connection.php";

    if (isset($_GET['first'])&&isset($_GET['last'])&&isset($_GET['email'])
    &&isset($_GET['username'])&&isset($_GET['sex'])&&isset($_GET['own'])
    &&isset($_GET['info'])&&isset($_GET['from'])){
    $first = $_GET['first'];
    $last = $_GET['last'];
    $email = $_GET['email'];
    $username = $_GET['username'];
    $sex = $_GET['sex'];
    $own = $_GET['own'];
    $info = $_GET['info'];
    $from = $_GET['from'];
    
    switch ($email){

    case "delete":
    $upit = "DELETE FROM user_info WHERE email = ".$email;
    if (!$q=$mysqli->query($upit)){
    echo "<br>Query is not valid.<br/>" . mysql_query();
    die();
    } else {
    echo "<p>Old e-mail is deleted.</p>";
    }
    break; 

    case "change":
    $upit="SELECT id, email FROM user_info WHERE id=".$id;
    if (!$q=$mysqli->query($upit)){
    echo "<p>Query is not valid.</p>" . mysql_query();
    die();
    } else {
    if ($q->num_rows!=1){
    echo "<p>Email does not exist.</p>";
    } else {
    $email = $q->fetch_object();
    $email = $vest->email;
    ?>
    <h1>Change e-mail</h1>
    <hr/>
    <form method="post" action="?email=change&id=<?php echo $_GET['email'];?>">
    New e-mail: <input type="text" name="email" /><br/>
    <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    }
    break;

    case "update":
    if (isset ($_POST['email'])){
    $email = $_POST['email'];
    $upit="UPDATE user_info SET email='". $email ."' WHERE id=". $id;
    if ($mysqli->query($upit)){
    if ($mysqli->affected_rows > 0 ){
    echo "<p>E-mail is updated..</p>";
    } else {
    echo "<p>Something went wrong.</p>";
    }
    } else {
    echo "<p>Something went wrong.</p>" . mysql_error();
    }
    } else {
    echo "<p>Please enter new e-mail correctly.";
    }
    break;

    default:
    echo "<p>Something went wrong.</p>";
    }
    break;
    }

    $sql="SELECT id, email FROM user_info";
    if (!$q=$mysqli->query($sql)){
    echo "Query is not valid.<br>" . mysql_query();
    die();
    }

    if ($q->num_rows==0){
    echo "There are no registered e-mails at the moment.";
    } else {
    ?>
    <h1>User e-mails</h1>
    <hr/>
    <table>
    <tr>
    <td><b>ID</b></td>
    <td><b>E-mail</b></td>
    </tr>
    <?php

    while ($red=$q->fetch_object()){
    ?>

    <tr>
    <td><?php echo $red->id; ?></td>
    <td><?php echo $red->email; ?></td>
    <td><a href="?email=change&id=<?php echo $red->email; ?>">Change</a></td>
    <td><a href="?email=delete&id=<?php echo $red->email; ?>">Delete</a></td>
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