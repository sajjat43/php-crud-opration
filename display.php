<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <a href="index.php" type="submit" class="btn btn-success">Add User</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `form`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                        <a href="update.php?updateid=' . $id . '" class="btn btn-primary">Update</a>
                        <a href="Delete.php?deleteid=' . $id . '" class="btn btn-danger">Delete</a>
                    </td>
                    </tr> ';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>