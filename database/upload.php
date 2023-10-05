<?php

$email=$_SESSION['email'];
if (isset($_POST['m_number'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "car";
    $con= mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("connection to this databse failed due to : " . mysqli_connect_error());
    }
    
    $statusMsg = '';
    $m_number = $_POST['m_number'];
    $Aname = $_POST['Aname'];
    $m_name = $_POST['m_name'];
    $m_color = $_POST['m_color'];
    $m_price = $_POST['m_price'];
    
    $sql = "INSERT INTO `new_car` (`m_number`,`m_name`,`m_color`,`m_price`,`agent_name`,`email`) VALUES ('$m_number','$m_name','$m_color','$m_price','$Aname','$email');";


    if (!$con->query($sql) == true) {

        echo "ERROR : $sql <br> $con->error";
    }
   
    
   
}
