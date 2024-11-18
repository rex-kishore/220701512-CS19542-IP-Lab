<?php
$servername = "localhost";
$username = "root";
$password = "P@ss_w0rd";
$dbname = "home_scape";


try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

?>
