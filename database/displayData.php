<?php

include './connect.php';

$sql = "SELECT * FROM new_car WHERE agent_name=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $Aname);
$stmt->execute();
$result = $stmt->get_result(); 

?>