<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-3">
        <a href="viewdata.php">View Data</a>
    </div>
    <!-- get date from user -->
    <div class="container-fluid col-md-6">
        <h3 class="text-center mt-2">Get Data from User</h3>
        <form action="" class="m-3" method="post">
            <div class="form-outline mb-3">
                <label class="form-label">Name :</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Date :</label>
                <input type="date" name="date" class="form-control">
            </div>
            <div class="form-outline mb-3">
                <input type="submit" name="add" class="btn btn-dark p-2">
            </div>
        </form>
    </div>

</body>

</html>

<?php

include 'connect.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $insert = "insert into `data` (name, email, date) values('$name', '$email', '$date')";
    $result = mysqli_query($con, $insert);

    if ($result) {
        echo "<script>window.alert('Data Added')</script>";
    }
}

?>