<?php
session_start();
if(isset($_SESSION['sign-in-sign-out'])){
    $sign_in_sign_out=$_SESSION['sign-in-sign-out'];
    $user=$_SESSION['user'];
}
else{
    $sign_in_sign_out=0;
    $user="no user";
}
$Logo="../assets/images/logo_.png";
$plants_page="plants.php";
$premiumContent_page="premiumContent.php";
$admin_page="adminPage.php";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='admin';
$imprint = "legals/imprint.php";
$privacyPolicy ="legals/privacyPolicy.php";
$termsOfUse ="legals/termsOfUse.php";

include "templates/nav.php";

include "connection.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type=$_POST['type'];


    $sql="insert into users (name,email,password,type,isPremium) values('$name','$email','$password','$type',0)";
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
<style>
    .container{
        margin-top: 200px;
    }
</style>
<body>

<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="display-4">Create User</h1>
        <button class="btn btn-dark my-3"><a href="adminPage.php" style="text-decoration: none" class="text-light" >Go back</a></button>
    </div>

    <form method="post">
        <div class="form-group mb-3">
            <label for="name">Username</label>
            <input type="text" required id="name" class="form-control" placeholder="enter name" name="name">
        </div>

        <div class="form-group mb-3">
            <label for="name">Email</label>
            <input type="text" required id="name" class="form-control" placeholder="enter email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="name">Password</label>
            <input type="text" required id="name" class="form-control" placeholder="enter password" name="password">
        </div>

        <label for="radios">User Type</label>
        <div class="form-row my-2 mb-4" id="radios">
                <label>
                    <input type="radio" name="type" value="user" checked>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>

