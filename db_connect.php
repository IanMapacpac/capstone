<?php  
//SERVER DETAILS
$servername="localhost";
$dbusername="root";
$dbpassword="root";
$dbname="edge";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?> 