<!DOCTYPE html>
<html>

<head> 

    <title>User info</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

    <!-- Naslov stranice -->
    <h3 id="naslov">User Info</h3>

<form method="post" action="">

    <!-- Forma za kontakt -->
    <h5 class="opis">Please enter your info.</h5>
    <div class="form">
        <form>
                    
            First Name:<br>
            <input type="text" name="first">
            <br>
            Last Name:<br>
            <input type="text" name="last">
            <br>
            Email:<br>
            <input type="email" name="email">
            <br>
            Username:<br>
            <input type="text" name="username">

        </form>
    </div>

    <!-- Padajuci izbornik -->
    <h5 class="opis">Where are you from?</h5>
    <div class="select" name="from">
        <select>
            <option value="europe">Europe</option>
            <option value="americas">Americas</option>
            <option value="asie">Asia</option>
            <option value="africa">Africa</option>
            <option value="australia">Australia</option>
            <option value="africa">Other</option>
        </select>
    </div>

    <!-- Radio -->
    <h5 class="opis">Are you male or female?</h5>
    <div class="radio">
        <input type="radio" name="sex" value="male">Male<br>
        <input type="radio" name="sex" value="female">Female<br>
    </div>
        
    <h5 class="opis">Are you a proud Frenchie owner?</h5>
    <div class="radio">
        <input type="radio" name="own" value="yes">I have a Frenchie<br>
        <input type="radio" name="own" value="no">I dont't have a Frenchie<br>
    </div>

    <!-- Textbox i Placeholder -->
    <h5 class="opis">Tell us something about yourself.</h5>
    <div class="placeholder">
        <textarea input type="text" rows="4" cols="50" name="info" 
        placeholder="Write something about yourself and your frenchie."></textarea>
    </div>

    <!-- Button -->
    <h5 class="opis">Press submit when you are done.</h5>
    <input type="submit" name="submit" value="Submit">

</form>

    <!-- PHP kod -->
    <?php
    if (isset($_POST["submit"])){
    //Prikupljanje podataka s forme
    
    if (isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['email'])
        &&isset($_POST['username'])&&isset($_POST['sex'])&&isset($_POST['own'])
        &&isset($_POST['info'])&&isset($_POST['from'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $own = $_POST['own'];
    $info = $_POST['info'];
    $from = $_POST['from'];
    
    //Operacije nad bazom
    include "connection.php";
    $sql = "INSERT INTO user_info (first_name, last_name, email, username, from, sex, own, info) 
        VALUES ('".$first."', '".$last."', '".$email."', '".$username."', '".$from."', '".$sex."', '".$own."', '".$info."')";
    if ($mysqli->query($sql)){
    echo "<p>Thank you for entering your info!</p>";
    } else {
    echo "<p>Ops! Something went wrong!</p>" . $mysqli->error;
    }
    } else {
    //Ako POST parametri nisu proslijeđeni
    echo "You must fill all your info before submiting!";
    }
    $mysqli->close();
    }
    ?>

</body>

</html>