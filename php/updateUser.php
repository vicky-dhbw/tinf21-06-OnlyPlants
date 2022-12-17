<?php
include "connection.php";
$update_id=$_GET['updateid'];

$sql="select * from users where id=$update_id";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);

$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$type=$row['type'];


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type=$_POST['type'];

    $sql="update users set name='$name',email='$email',password='$password',type='$type' where id=$update_id";
    $result=mysqli_query($connection,$sql);

    if($result){
        header("Location: adminPage.php");
    }else{
        die(mysqli_error($connection));
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

<div class="container my-5">
    <h1 class="display-4">Update User</h1>
    <form method="post">
        <div class="form-group mb-3">
            <label for="name">Username</label>
            <input type="text" required id="name" class="form-control" placeholder="Enter plant name" name="name" value="<?php echo $name?>">
        </div>

        <div class="form-group mb-3">
            <label for="name">Email</label>
            <input type="text" required id="name" class="form-control" placeholder="Enter plant name" name="email" value="<?php echo $email?>">
        </div>

        <div class="form-group mb-3">
            <label for="name">Password</label>
            <input type="text" required id="name" class="form-control" placeholder="Enter plant name" name="password" value="<?php echo $password?>">
        </div>

        <label for="radios">User Type</label>
        <div class="form-row my-2 mb-4" id="radios">
            <label>
                <input type="radio" name="type" value="user">
                user
            </label>
            <label>
                <input type="radio" name="type" value="admin">
                admin
            </label>
        </div>

        <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<script>

</script>
</body>

</html>

