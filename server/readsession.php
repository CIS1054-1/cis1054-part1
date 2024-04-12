<html>
<body>
<?php

/**
* This fuction echoes the session variables stored by the script processrequest.php
*
* @author Carlos Alvarez & Gioele Giunta
* @version 1.0
* @since 2023-04-12
*/

session_start();

$username = $_SESSION['username'];
$name = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$age = $_SESSION['age'];
$bio =  $_SESSION['bio'];

echo "Username: " .$username;
echo "First name: " .$name;
echo "Surname: " .$surname;
echo "Age: " .$age;
echo "Bio: " .$bio;

?> 
</body>

</html>