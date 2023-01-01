<?php
session_start();
if(isset($_SESSION['sign-in-sign-out'])){
    $sign_in_sign_out=$_SESSION['sign-in-sign-out'];
}
else{
    $sign_in_sign_out=0;
    $user="no user";
}
require "php/configure.php";
$plants_page="php/plants.php";
$premiumContent_page="php/premiumContent.php";
$contact_page="php/contact.php";
$Logo="assets/images/logo_.png";
$home_page="#";
$signin_page="php/signin.php";
$controlButtonPage='php/controlButton.php';
$currentPage='index';
$admin_page="php/adminPage.php";
$profile="php/profile.php";

$currentUser=$_SESSION['user'];
$number=0;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OnlyPlants</title>
    <link rel="icon" href="favicon.png">
    <!--This link has to be in the head for bootstrap-->
</head>
<body>
<?php include __DIR__."/php/templates/nav.php"; ?>

<style>

    .container-fluid{
        padding-right: 300px;
        padding-left: 50px;
    }
    .anim{
        max-width: 800px;
        height: auto;
        margin-top: auto;
    }
    .animDiv{

        padding-left: 10vw;
    }
    .col{
        margin-top: 140px;
    }
    .plant{
        font-size: 8vw;
        font-weight: bolder;
    }
    .btn{
        width: 300px;
        border-radius: 20px;
        height: 70px;
    }

    @media (max-width: 1200px) {
        .btn{
            width: 180px;
            border-radius: 30px;
            height: 45px;
        }

    }
</style>

<div class="container-fluid">

    <div class="row  justify-content-md-center">
        <div class="col animDiv">
            <div id="animContainer" class="anim ">
                <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.1/lottie.min.js'></script> <!-- path of bodymovin library-->
                <script  src="js/script.js"></script>
            </div>
        </div>
        <div class="col colText">
            <div class="d-flex align-items-start flex-column">
                <h1 class="plant p-2">Plant a plant today!</h1>
                <br>
                <button type="button" class="btn btn-dark">Explore</button>
            </div>
        </div>
    </div>




    <?php
    /*echo "STATUS: ".$sign_in_sign_out."<br>";
    echo "<br>";
    echo "USER ".$is_signed_in;
    echo "<br>";
    if(isset($_SESSION['user'])){echo "USER: ".$_SESSION['user']."<br>";}
    if(isset($_SESSION['id'])){echo "ID: ".$_SESSION['id']."<br>";}
    if(isset($_SESSION['type'])){echo "TYPE: ".$_SESSION['type']."<br>";}
    echo "<br>";
    echo "<br>";
    echo "<br>";
    if(isset($_SESSION['id'])){
        $number=$_SESSION['id'];}
    echo $number;*/
    ?>

</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>