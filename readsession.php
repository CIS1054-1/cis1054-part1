<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Info</title>
    <link rel="stylesheet" href="./style/main.css">
</head>
<body>
    <main>
        <div class="text-box">
            <h1> Your Info</h1>
            <?php

/**
* This fuction calculate the date and time of the first time the page was loaded
*
* @author Gioele Giunta & Carlos Alvarez
* @version 1.0
* @since 2023-04-12
*/

session_start();

$username = $_SESSION['username'];
$name = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$age = $_SESSION['age'];
$bio =  $_SESSION['bio'];

echo "<p>Username: $username </p>";
echo "First name: $name </p>";
echo "Surname: $surname </p>";
echo "Age: $age </p>";
echo "Bio: $bio </p>";
?> 
        </div>
        <img src="./img/avatar.png">
    </main>
    <footer>
        <p>&copy; 2024 Gioele Giunta & Carlos Alvarez</p>
    </footer>
</body>
</html>
