<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit</title>
    <link rel="stylesheet" href="./style/main.css">
</head>
<body>
    <main>
        <div class="text-box">
            <?php

/**
* This fuction calculate the date and time of the first time the page was loaded
*
* @author Carlos Alvarez & Gioele Giunta
* @version 1.0
* @since 2023-04-12
*/

session_start();
function calculate_time($date){
    $now = new DateTime;
    $ago = new DateTime($date);
    $difference = $now->format('U') - ($ago->format('U'));
    return $difference;
}

if(!isset($_SESSION['time'])){
    $_SESSION['time'] = date("h:i:sa");
}

$difference = calculate_time($_SESSION['time']);
echo "<h1>The last visit was: $difference seconds ago</h1>";
?> 
        </div>
        <img src="./img/clock.png">
    </main>
    <footer>
        <p>&copy; 2024 Gioele Giunta & Carlos Alvarez</p>
    </footer>
</body>
</html>
