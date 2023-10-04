<?php
if (isset($_POST['email'])) {

    include './connect.php';

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

   
}
include_once '../database/upload.php';
include_once '../database/displayData.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent | New Car</title>
    <link href="../styles/new_car.css" rel="stylesheet">
    

<body>
    <div class="upform">
        <H1><?php echo "Welcome ", $Aname ?> <a href="../Home.php"><button class="btn" >Logout</button></a></H1>
        <hr>
        <h1>ADD NEW CAR</h1>
        <form class="car-form" method="post" enctype="multipart/form-data">
            <input  required class="inputs" placeholder="enter model number" type="text" name="m_number" id="m_number" />
            <input  required class="inputs" placeholder="enter agent name " type="text" name="Aname" id="Aname" value='<?php echo $Aname; ?>' placeholder='<?php echo $Aname; ?>' />
            <input  required class="inputs" placeholder="enter model color" type="text" name="m_color" id="m_color" />
            <input  required class="inputs" placeholder="entermodel price/day " type="text" name="m_price" id="m_price" />
            <select required   name="m_name" id="m_name">
                <option  value="volvo">Volvo</option>
                <option  value="Suv">suv</option>
                <option  value="Alto">alto</option>
                <option  value="Maruti">maruti</option>
            </select>
         <input class="btn" type="submit" name="submit" value="ADD" />
         

        </form>
    </div>
    <div class="car-display">
    <h1>MY CARS</h1>
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
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['m_number'];?></td>
                <td><?php echo $rows['m_name'];?></td>
                <td><?php echo $rows['m_color'];?></td>
                <td><?php echo $rows['m_price'];?></td>
                <td><?php echo $rows['is_available'];?></td>
                <td><?php echo $rows['agent_name'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
       
    </div>
    </div>
</body>

</html>