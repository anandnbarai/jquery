<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'an';

// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));

if($con){
    // echo "Success";
}