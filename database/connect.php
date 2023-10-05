<?php
if (isset($_POST['email'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "car";
    $con= mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("connection to this databse failed due to : " . mysqli_connect_error());
    }
}
?>