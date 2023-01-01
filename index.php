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

.container{
    margin-top: 150px;
}

    .plant{
        font-size: 5vw;
        font-weight: bolder;
    }
    .btn{
        width: 250px;
        border-radius: 20px;
        height: 60px;
    }

    @media (max-width: 1200px) {
        .btn{
            width: 150px;
            border-radius: 25px;
            height: 45px;
        }

    }
</style>

<div class="container align-items-start">

    <div class="row align-items-center">
        <div class="col-md-6 col-sm-5 col-xs-10 animDiv myCol">
            <div id="animContainer" class="anim ">
                <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.1/lottie.min.js'></script> <!-- path of bodymovin library-->
                <script  src="js/script.js"></script>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-10 colText myCol">
            <div class="d-flex align-items-start flex-column">
                <h1 class="plant p-3">Plant a plant today!</h1>
                <a href="php/plants.php"><button type="button" class="btn btn-dark">Explore</button></a>

                <p class="my-4"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi culpa deserunt dolores ducimus eaque est fuga fugiat hic itaque minima nemo, nesciunt nihil omnis pariatur repellendus sapiente vel veniam.</i></p>
            </div>
        </div>
    </div>


</div>
<br>

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






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
