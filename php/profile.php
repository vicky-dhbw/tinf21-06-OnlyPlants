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
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$admin_page="adminPage.php";

$profile="#";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="../css/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<style>
    .container{
        margin-top: 170px;
    }

    .my-col{
        border: 1px solid black;
        border-radius: 30px;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }
    .my-row{
        gap: 1rem;
    }
</style>
<?php include __DIR__.'/templates/nav.php'; ?>

<div class="container">
    <!--<h1>Profile</h1>
    <h2><//?php if(isset($_SESSION['user'])){echo "USER: ".$_SESSION['user'];}?></h2>
    <h2><//?php if(isset($_SESSION['id'])){echo "ID: ".$_SESSION['id'];}?></h2>
    <h2><//?php if(isset($_SESSION['type'])){echo "TYPE: ".$_SESSION['type'];}?></h2>-->
</div>

<div class="container">

    <div class="row my-row">
        <div class="col-2">
            <div class="circle">
                <div class="circle-txt">
                    <h2 class="user"><?php if(isset($_SESSION['user'])){echo $_SESSION['user'][0];}?></h2>
                </div>
            </div>
        </div>
        <div class="col-4 my-col">
            <h1><?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h1>
            <span>Member since yesterday</span><br>
            <span>admin@admin.de</span>
        </div>

        <div class="col-4 my-col">
            <div class="d-flex justify-content-between">
                <h3>Posts</h3>
                <h3>Premium Posts</h3>
            </div>
            <div class="d-flex justify-content-between">
                <h1>69</h1>
                <h1>72</h1>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
