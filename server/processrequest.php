<?php
/**
 * This function processes a client request, reading the submitted parameters (username and age)
 * and storing them in session variables.
 * 
 * It supports both GET and POST requests.
 *
 * @author Gioele Giunta
 * @version 1.0
 * @since 2023-04-12
 */

    // Determine the request method
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    if ($requestMethod === 'GET') {
        if(isempty($_GET['username']) || isempty($_GET['firstname'])  || isempty($_GET['surname']) || isempty($_GET['age']) || isempty($_GET['bio'])){
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['firstname'] = $_GET['firstname'];
            $_SESSION['surname'] = $_GET['surname'];
            $_SESSION['age'] = $_GET['age'];
            $_SESSION['bio'] = $_GET['bio'];
            $htmlRes = <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <style>

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to our Website</h1>
        <p>This is a long HTML example that demonstrates how to print a large block of HTML code using the echo statement in PHP.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut risus in augue luctus venenatis. Sed tincidunt, magna a ultricies lacinia, quam nisl imperdiet mauris, quam nisl imperdiet mauris. Fusce at maximus velit. Suspendisse potenti. Donec varius, nisl eget ultricies tincidunt, nunc justo facilisis nunc, quis aliquet em mi vitae sem. Aliquam erat volutpat. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </main>
    <footer>
        <p>&copy; 2023 Long HTML Example. All rights reserved.</p>
    </footer>
</body>
</html>
HTML;
        }
    } elseif($requestMethod === 'POST') {
        if(isempty($_POST['username']) || isempty($_POST['firstname'])  || isempty($_POST['surname']) || isempty($_POST['age']) || isempty($_POST['bio'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['surname'] = $_POST['surname'];
            $_SESSION['age'] = $_POST['age'];
            $_SESSION['bio'] = $_POST['bio'];
            //Return the status pf the operation
            $res = ['status' => "true", "message" => "Success"];
            echo json_encode($res);
        }
    } else {

        return;
    }

?>