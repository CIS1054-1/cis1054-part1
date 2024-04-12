<html>
<body>
<?php

/**
* This fuction calculate the date and time of the first time the page was loaded
*
* @author Carlos Alvarez
* @version 1.0
* @since 2023-04-12
*/

session_start();
function calculate_time($date){
    $now = new DateTime;
    $ago = new DateTime($date);
    $difference = $now->format('U') - ($ago->format('U'));
    
    
    echo "You first used this page .$difference seconds ago";
}

if(!isset($_SESSION['time'])){
    $_SESSION['time'] = date("h:i:sa");
    }

calculate_time($_SESSION['time']);

?> 
</body>

</html>
