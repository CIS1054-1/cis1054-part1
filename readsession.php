<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Infos</title>
    <link rel="stylesheet" href="./style/main.css">
</head>
<body>
    <main>
        <div class="text-box">
            <?php

/**
* This function read the data inside the session, and print at screen
*
* @author Gioele Giunta & Carlos Alvarez
* @version 1.0
* @since 2023-04-12
*/

session_start();

//Check if there is Session Data registered
$status = !empty($_SESSION['username']) && !empty($_SESSION['firstname']) && !empty($_SESSION['surname']) && !empty($_SESSION['age']) && !empty($_SESSION['bio']);


if($status){
    echo "<h1> Your Infos</h1>";
    $username = $_SESSION['username'];
    $name = $_SESSION['firstname'];
    $surname = $_SESSION['surname'];
    $age = $_SESSION['age'];
    $bio =  $_SESSION['bio'];
    //Print infos
    echo "<p><b>Username:</b> $username <br><b>First name:</b> $name <br><b>Surname:</b> $surname <br><b>Age:</b> $age <br><b>Bio:</b> $bio </p>";
}else{
    //Print error page
    echo "<h1>Your informations could not be found <br>:(</h1>";
}



?> 
        </div>
        <?php
        if($status){
           echo "<img src=\"./img/avatar.png\">";
        }else{
            echo "<img src=\"./img/sad.jpeg\">";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Gioele Giunta & Carlos Alvarez</p>
    </footer>
</body>
</html>
