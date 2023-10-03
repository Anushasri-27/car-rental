<?php
if (isset($_POST['email'])) {

$server = "localhost";
$username = "root";
$password = "";
$db = "car";
$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
   die("connection to this databse failed due to : " . mysqli_connect_error());
}else{
    echo "coonected";
}


$email=$_POST['email'];
$user=$_POST['user'];
$fname =$_POST['fname'];
$Lname =$_POST['Lname'];
$password =$_POST['password'];

echo $email ,$user ,$fname ,$Lname ,$password ;



}
 ?>



