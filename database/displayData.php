<?php

include './connect.php';

$email=$_SESSION['email'];
$sql = "SELECT * FROM new_car WHERE agent_name=? AND email=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $Aname,$email);
$stmt->execute();
$result = $stmt->get_result(); 

?>