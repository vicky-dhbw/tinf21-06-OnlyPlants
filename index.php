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

    .myCont_{
        margin-top: 150px;
        padding-bottom: 50px;
    }

    .plant{
        font-size: 5vw;
        font-weight: bolder;
    }

    .myButton{
        width: 250px;
        border-radius: 20px;
        height: 60px;
    }
    .myButton2{
        width: 250px;
        border-radius: 0;
        height: 60px;
        background: #1F8475;
        color: white;
        border:1px solid black;
    }

    body{
        min-height: 100vh;
    }


    @media (max-width: 1200px) {
        .myButton{
            width: 150px;
            border-radius: 25px;
            height: 45px;
        }

    }
</style>

<div class="container myCont_ align-items-start">

    <div class="row align-items-center">
        <div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 myCol">
            <div id="animContainer" class="anim ">
                <script src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.1/lottie.min.js'></script> <!-- path of bodymovin library-->
                <script  src="js/script.js"></script>
            </div>
        </div>
        <div class="col-lg-6 col-md-10 col-sm-12 col-xs-12 colText myCol">
            <div class="d-flex align-items-start flex-column">
                <h1 class="plant p-3">Plant a plant today!</h1>
                <a href="php/plants.php"><button type="button" class="btn btn-dark myButton shadow">Explore</button></a>

                <p class="my-4"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, commodi culpa deserunt dolores ducimus eaque est fuga fugiat hic itaque minima nemo, nesciunt nihil omnis pariatur repellendus sapiente vel veniam.</i></p>
            </div>
        </div>
    </div>


</div>
<section class="vh-50" style="background-color: #A6E1A8;">

    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <figure class="text-center bg-white py-5 px-4 shadow-lg" style="border-radius: .75rem;">
                    <i class="far fa-gem fa-lg mb-4" style="color: #f9a169;"></i>
                    <blockquote class="blockquote pb-2">
                        <p>
                            <i class="fas fa-angle-double-left" style="color: #f9a169;"></i>
                            <span class="lead font-italic">“The best time to plant a tree was 20 years ago. The second best time is now.”</span>
                            <i class="fas fa-angle-double-right" style="color: #f9a169;"></i>
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 font-italic">
                        Chinese proverb
                    </figcaption>
                </figure>
            </div>
            <div class="col col-lg-6">
                <figure class="text-center bg-white py-5 px-4 shadow-lg" style="border-radius: .75rem;">
                    <i class="far fa-gem fa-lg mb-4" style="color: #f36f63;"></i>
                    <blockquote class="blockquote pb-2">
                        <p>
                            <i class="fas fa-angle-double-left" style="color: #f36f63;"></i>
                            <span class="lead font-italic">“In some Native languages the term for plants translates to “those who take care of us.” </span>
                            <i class="fas fa-angle-double-right" style="color: #f36f63;"></i>
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 font-italic">
                        Robin Wall Kimmerer
                    </figcaption>
                </figure>
            </div>
            <div class="d-flex justify-content-center align-items-center"">
                <a href="php/register.php"><button type="button" class="btn btn-dark myButton2 shadow">Sign up</button></a>
                <img src="assets/images/myLeaf.png" style="width: 100px; height: 100px">
            </div>
        </div>
</section>

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

include "php/templates/footer.php";
?>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
