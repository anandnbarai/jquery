<?php

include 'connect.php';

// fetch records
$sql = "delete * from data where id = $id";
$result = mysqli_query($con, $sql);

?>
