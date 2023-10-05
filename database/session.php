<?php
$msg = '';
session_start();
$email= $_POST['email'];
$pass= $_POST['password'];

include_once "../database/connect.php";
$query = "Select * from `agent` where email='$email' AND password='$pass'";

if ($result = mysqli_query($con, $query)) {
 
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time(); 
        $_SESSION['email'] = $email;
        while($row = $result->fetch_assoc()) { 
        $_SESSION['Aname'] =$row["Aname"]; 
        }
        echo "<script>location.href='../database/agent.php';</script>"; 
    }else{

        $sql = "Select * from `user` where email='$email' AND password='$pass'";
            if ($results = mysqli_query($con, $sql)) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['email'] = $email; 
                while($row = $result->fetch_assoc()) { 
                $_SESSION['fname'] =$row["fname"]; 
                }
                echo "<script>location.href='../database/cust.php';</script>"; 

            }else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("password & email does not match")';  
                echo '</script>'; 
                echo "<script>location.href='../login.php';</script>";

            }
          
    }

} else {

    $msg = 'Wrong username or password';

}
