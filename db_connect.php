<?php 
    include 'other/connect.php';
    $conn = mysqli_connect($ip, $user, $paswd, $db_name);

    if (!$conn) {
        die("Conn failed". mysqli_connect_error());
    } else {
        //echo "Connected successfully <br>";
    }
?>