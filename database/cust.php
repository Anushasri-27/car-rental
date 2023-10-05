<?php
session_start();
$email = $_SESSION['email'];

$server = "localhost";
$username = "root";
$password = "";
$db = "car";
$con = mysqli_connect($server, $username, $password, $db);


if (!$con) {
    die("connection to this databse failed due to : " . mysqli_connect_error());
}
if (isset($_SESSION['email'])) {

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $fname = "neha";   //$_POST['fname'];
        $Lname = $_POST['Lname'];
        $password = $_POST['password'];

        $query = "Select * from `user` where email='$email'";

        if ($result = mysqli_query($con, $query)) {

            if (mysqli_num_rows($result) > 0) {


                echo '<script type ="text/JavaScript">';
                echo 'alert("USER ALREDY EXIST TRY TO LOGIN WITH ANOTHER EMAIL")';
                echo '</script>';
                echo "<script>location.href='../views/Register_cust.php';</script>";
            } else {


                $sql = "INSERT INTO `user` (`email`,`fname`,`Lname`,`password`,`dt`,`user`) VALUES ('$email','$fname','$Lname','$password', current_timestamp() , '$user');";


                if (!$con->query($sql) == true) {

                    echo "ERROR : $sql <br> $con->error";
                }
                echo "<script>location.href='../login.php';</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renter | New Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles/new_car.css" rel="stylesheet">


<body>
    <div class="upform">

        <H1>welcome <?php ?></H1> <a href="../Home.php"><button class="btn">Logout</button></a></H1>
        <hr>
        <h1>FILL THE FORM TO BOOK </h1>
        <form class="car-form" method="post" action="../database/booking.php" enctype="multipart/form-data">

            <input required class="inputs" placeholder="enter your email" type="text" name="fname" id="fname" value='<?php echo $_SESSION['email']; ?>' />
            <input required class="inputs" placeholder="enter model number" type="text" name="m_number" id="m_number" />
            <input required class="inputs" placeholder="no. of days" type="number" name="nod" id="nod" />
            <input required class="inputs" placeholder="date" type="date" name="date" id="date" />
            <input class="btn" type="submit" name="submit" value="ADD" />
        </form>
    </div>
    <div class="car-display">
        <h1>CARS AVAIABLE FOR BOOKING</h1>
        <div>
            <table id="customers">
                <tr>
                    <th>model number </th>
                    <th>model name</th>
                    <th>model color</th>
                    <th>model price</th>
                    <th>available</th>
                    <th> Agent </th>

                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                $sql = "SELECT * FROM new_car";
                $result = mysqli_query($con, $sql);
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['m_number']; ?></td>
                        <td><?php echo $rows['m_name']; ?></td>
                        <td><?php echo $rows['m_color']; ?></td>
                        <td><?php echo $rows['m_price']; ?></td>
                        <td><?php echo $rows['is_available']; ?></td>
                        <td><?php echo $rows['agent_name']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <hr>
            <table id="customers">
                <tr>

                    <th>model number</th>
                    <th>number of days</th>
                    <th>total bill</th>
                    <th>start date</th>


                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                $query = "Select * from `booking` where fname='$email'";
                $query_result = mysqli_query($con, $query);
                if (mysqli_num_rows($query_result) > 0) {
                    while ($rows = mysqli_fetch_assoc($query_result)) {
                ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                            <td><?php echo $rows['m_number']; ?></td>
                            <td><?php echo $rows['nod']; ?></td>
                            <td><?php echo $rows['bill']; ?></td>
                            <td><?php echo $rows['date']; ?></td>

                        </tr>
                <?php
                    }
                }
                $con->close();
                ?>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>