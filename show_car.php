<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "car";
$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
    die("connection to this databse failed due to : " . mysqli_connect_error());
}

$sql = "SELECT * FROM new_car";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
    <link href="./styles//home.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./styles/new_car.css" rel="stylesheet">
</head>

<body class="text-light">
    <header>
        <?php require_once "Menu.php" ?>
       
    </header>
    <div class="mt-5 mx-5">
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

        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>