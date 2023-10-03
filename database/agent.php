<?php
if (isset($_POST['email'])) {

$server = "localhost";
$username = "root";
$password = "";
$db = "car";
$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
   die("connection to this databse failed due to : " . mysqli_connect_error());
}

$email=$_POST['email'];
$user=$_POST['user'];
$Aname =$_POST['Aname'];
$Cname =$_POST['Cname'];
$password =$_POST['password'];
$cpass =$_POST['Cpass'];

$sql = "INSERT INTO `agent` (`agent`,`Aname`,`Cname`,`email`,`password`,`dt`) VALUES ('$user','$Aname','$Cname','$email','$password', current_timestamp());";


if (!$con->query($sql) == true) {

   echo "ERROR : $sql <br> $con->error";
}

$con->close();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../styles/home.css" rel="stylesheet" />
    <link href="../styles/login.css" rel="stylesheet" />
</head>
<body>
    <?php require '../login.php'; ?>
</body>
</html>
