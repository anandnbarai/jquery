<?php

include 'connect.php';

// fetch records
$sql = "select * from data";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

//create an associative array
$output = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array,
);

echo json_encode($output);
