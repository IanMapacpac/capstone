<?php
session_start();
include 'db_connect.php'; // Assuming this file contains your PDO configuration.

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Create a PDO instance (assuming $pdo is defined in db_connect.php)
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        // Set PDO to throw exceptions on errors
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST['username'];
        $pass = strval($_POST['pass']);
        
        // Prepare a statement to query the database
        $sql = 'SELECT * FROM user_info WHERE username = :username';
        $stmt = $conn->prepare($sql);  
        $stmt-> bindParam('username', $username, PDO::PARAM_STR);
        $stmt->execute(); // Bind the email parameter and execute
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Close the statement
        $stmt->closeCursor();

        
        $user_pass = strval($user['password']);
        echo $user['username'];
        echo "input is ".$pass;
        echo "db is ".$user_pass;
        if ($username && $pass == $user_pass) {
            // Password verification is successful
            $_SESSION['login'] = true;
            $_SESSION['email'] = $email;
            header('Location: user/user_profile.php');
        } else {
            echo "<script>alert('Username or Password are Incorrect!');</script>";
            echo $user['username'];
            echo "input is ".$pass;
            echo "db is ".$user_pass;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the session
session_write_close();
?>