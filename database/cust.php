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


    $email = $_POST['email'];
    $user = $_POST['user'];
    $fname = $_POST['fname'];
    $Lname = $_POST['Lname'];
    $password = $_POST['password'];



    $sql = "INSERT INTO `user` (`email`,`fname`,`Lname`,`password`,`dt`,`user`) VALUES ('$email','$fname','$Lname','$password', current_timestamp() , '$user');";


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
    <title>Document</title>
</head>
<body>

<form method="post" action="upload.php" enctype="multipart/form-data">
   <input type="file" name="image" />
   <input type="submit" name="submit" value="Upload" />
</form>
    
</body>
</html>
