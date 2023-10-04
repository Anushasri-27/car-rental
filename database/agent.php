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
    $Aname = $_POST['Aname'];
    $Cname = $_POST['Cname'];
    $password = $_POST['password'];
    $cpass = $_POST['Cpass'];

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
    <title>Document</title>
</head>

<body>
    <div>
         <H1><?php echo "hi ," , $Aname ,"thank you for registering with us" ?></H1>
        <h1>ADD NEW CAR</h1>
        <form class="car-form" method="post" action="upload.php" enctype="multipart/form-data">
            <input type="number" name="m_number" id="m_number" />
             <input type="text" name="Aname" id="Aname" value='<?php echo $Aname; ?>' placeholder='<?php echo $Aname; ?>' />
            <input type="text" name="m_name" id="m_name" />
            <input type="text" name="m_color" id="m_color" />
            <input type="text" name="m_price" id="m_price" />
            <input type="file" name="m_img" id="m_img" />
            <input type="submit" name="submit" value="Upload" />
        </form>
    </div>
</body>

</html>