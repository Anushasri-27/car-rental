<?php
if (isset($_POST['m_number'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "car";
    $con = mysqli_connect($server, $username, $password, $db);

    if (!$con) {
        die("connection to this databse failed due to : " . mysqli_connect_error());
    }

    $m_number = $_POST['m_number'];
    $fname = $_POST['fname'];
    $nod = (int)$_POST['nod'];
    $date = $_POST['date'];
    $price = 0;
    $bill = 0;
    $sql = "SELECT * FROM new_car";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        if ($row["m_number"] == $m_number) {
            $price = $row["m_price"];
        }
    }

    $bill = $nod * $price;





    $sql = "INSERT INTO `booking` (`fname`,`m_number`,`bill`,`nod`,`date`) VALUES ('$fname','$m_number','$bill','$nod','$date');";


    if (!$con->query($sql) == true) {

        echo "ERROR : $sql <br> $con->error";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../styles/home.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     
</head>

<body>

    <div class="container mt-5 d-flex justify-content-center align-items-center">
    <div class="jumbotron text-light">
        <h1>booking summary</h1>
        <p> congratulations <?php echo $fname ?>
            your booking is confirmed from day <?php echo $date ?> for <?php echo $nod ?> days
            total ammount : <?php echo $bill ?></p>
        <p><a class="btn btn-primary btn-lg" href="../Home.php" role="button">home</a></p>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>