<html>

<body>
<?php

/**
* This fuction return the current date and time
*
* @author Carlos Alvarez
* @version 1.0
* @since 2023-04-12
*/

date_default_timezone_get();
$date = date('m/d/y h:i:s a', time());
echo "Current date and time: " . $date
?> 
</body>

</html>
