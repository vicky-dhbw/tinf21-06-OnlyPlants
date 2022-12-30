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

$id="";
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
}
include "connection.php";

$sql="SELECT count(*) as total_posts from plants where userid=$id and isPremium=0";
$result=mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);
$total_posts=$data['total_posts'];

$sql=null;
$sql="SELECT count(*) as prem_posts from plants where userid=$id and isPremium=1";
$result=mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);
$prem_posts=$data['prem_posts'];

if($prem_posts==null){
    $prem_posts=0;
}


$sql=null;
$sql="SELECT * from users where id=$id";
$result=mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);
$reg_date=$posted=date('M j Y g:i A', strtotime($data['reg_date']));
$email=$data['email'];


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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/buttonStyle.css">
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

    <div class="row my-row">
        <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="circle">
                <div class="circle-txt">
                    <h2 class="user"><?php if(isset($_SESSION['user'])){echo $_SESSION['user'][0];}?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <h1><?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></h1>
            <span><?php echo "Member since " .$reg_date;?></span><br>
            <span><?php echo $email;?></span>
        </div>

        <div class="col-sm-6 col-xs-3 col-lg-4 col-md-4 ">
            <div class="d-flex justify-content-between">
                <h4>Posts</h4>
                <h4>Premium Posts</h4>
            </div>
            <div class="d-flex justify-content-between">
                <h1><?php echo $total_posts?></h1>
                <h1><?php echo $prem_posts?></h1>
            </div>
        </div>
    </div>
    <hr class="my-4">

    <h1 class="my-6">My Posts</h1>
    <hr class="my-4">
    <div class="container-fluid">
        <?php

        $sql="select * from plants where userid=$id";
        $result=mysqli_query($connection,$sql);

        while ($row=mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $type = $row['type'];
            $category = $row['category'];
            $color = $row['color'];
            $age = $row['age'];
            $height = $row['height'];
            $image = $row['url'];
            $username=$row['username'];
            $plant_id=$row['id'];
            $plant_user=$row['userid'];
            echo '
    <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="'.$image.'">
                </div>
                <div class="card-body">
                    <h5 class="p-2"><strong>'.$name.'</strong> </h5>
                    <p class="p-1"><strong>Created by</strong>: '.$username.'</p>
                    <p class="p-1"><strong>Category:</strong> '.$category.'</p>
                    <p class="p-1"><strong>Color:</strong> '.$color.'</p>
                    <p class="p-1"><strong>Age:</strong> '.$age.' weeks</p>
                </div>'?>
            <?php
            if(isset($_SESSION['sign-in-sign-out'])){

                echo ' <div class="card-footer">
             <a class="rounded-button2" href="editPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirectProfile=1">
                 <ion-icon size="large" name="create-outline"></ion-icon>
             </a>
             <a class="rounded-button" href="deletePlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirectProfile=1">
                 <ion-icon size="large" name="trash-outline"></ion-icon>
             </a>
               <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirect=1">
                   <ion-icon size="large" name="eye-outline"></ion-icon>
               </a>
                </div>';
            }
            ?>
            <?php echo '  </div>
           
        </div>';}

        ?>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
