<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `form`(name,email,mobile,password)value('$name','$email','$mobile','$password')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_errno($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center py-3">Give Your Information</h1>
        <form action="" method="POST">
            <div class="container py-2">
                <div class="form-group">
                    <label>name</label>
                    <input type="name" class="form-control" name="name" placeholder="Enter Name" autocomplete="off">
                </div>
                <div>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off">

                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="number" class="form-control" name="password" placeholder="Password" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" name="mobile" placeholder="Enter mobile number" autocomplete="off">
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>