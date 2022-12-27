<?php
session_start();

$currentPage = 'viewPlant';
if (isset($_SESSION['sign-in-sign-out'])) {
    $sign_in_sign_out = $_SESSION['sign-in-sign-out'];
    $user = $_SESSION['user'];
} else {
    $sign_in_sign_out = 0;
    $user = "no user";
}
$Logo = "../assets/images/logo_.png";
$plants_page = "plants.php";
$premiumContent_page = "premiumContent.php";
$admin_page = "adminPage.php";
$contact_page = "contact.php";
$home_page = "../index.php";
$signin_page = "signin.php";
$controlButtonPage = 'controlButton.php';
$profile='profile.php';

include "templates/nav.php";
include "connection.php";

$plant_id = $_GET['plant_id'];
$plant_user = $_GET['plant_user'];
$current_user_id=$_SESSION['id'];
$current_user_type=$_SESSION['type'];

$sql = "select * from plants where id='$plant_id'";
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$type = $row['type'];
$category = $row['category'];
$color = $row['color'];
$age = $row['age'];
$height = $row['height'];
$image = $row['url'];
$username = $row['username'];
$plant_id = $row['id'];
$plant_user = $row['userid'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/buttonStyle2.css">
    <link rel="stylesheet" href="../css/profile2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>

    .plant-image{
        display: block;
        width:100%;
        max-height: 200%;
        aspect-ratio: 1/1;
        object-fit: cover;
        object-position: center;
    }

    .pad{
        padding-top: 20px;
        padding-left: 10px;
        padding-right: 10px;
    }
    .container{
        margin-top: 170px;
        padding-left: 100px;
    }
    .plant-details{
        padding-top: 60px;
        padding-left: 30px;
    }
    .my-d-flex{
        gap: 1rem;
    }
</style>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-5 shadow-lg p-3">
            <img class="plant-image" src="<?php echo $image?>" alt="">
        </div>
        <div class="col-md-6 shadow-lg plant-details">
            <h1><?php echo $username?></h1>

            <div class="d-flex align-items-center p-2 mb-4">
                <a class="rounded-buttonCreator">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <p class="pad">created by <?php echo $username?></p>
            </div>

            <h5 class="p-1">Category: <?php echo $category?></h5>
            <h5 class="p-1">Type: <?php echo $type?></h5>
            <h5 class="p-1">Color: <?php echo $color?></h5>
            <h5 class="p-1">Age in weeks: <?php echo $age?></h5>
            <h5 class="p-1">Height in meters: <?php echo $height?></h5>
            <h5 class="p-1">is Premium: </h5>
            <br>
            <br>
        </div>
    </div>

    <br>
    <div class="d-flex align-items-center justify-content-start">
        <a class="rounded-buttonLike">
            <ion-icon size="small"  name="heart-outline"></ion-icon>
        </a>

        <p class="pad">1 Like </p>
        <a class="rounded-buttonComment">
            <ion-icon size="small" name="chatbox-outline"></ion-icon>
        </a>
        <p class="pad">2 Comments</p>
    </div>

    <br>

    <h1 class="my-4">Comments</h1>
    <hr class="my-4">

    <?php

    for($a=1;$a<=3;$a++){
        echo '
         <div class="d-flex my-d-flex">
        <div class="circle">
            <div class="circle-txt">
                <h2 class="user">u</h2>
            </div>
        </div>
        <div class="shadow p-3 mb-5 bg-light rounded">No shadow kjfbgslkbjslfbkjnsdfbn kdfnblskdjnbsdgb</div>
    </div>
        
        
        ';
    }

    ?>
    <form class="mb-4">
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="comment here..">
        </div>
        <button type="submit" class="btn btn-success">Comment</button>
    </form>
</div>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

