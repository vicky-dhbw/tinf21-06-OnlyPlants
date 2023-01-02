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
if(isset($_SESSION['id'])){
    $current_user_id=$_SESSION['id'];
}
if(isset($_SESSION['type'])){
    $current_user_type=$_SESSION['type'];
}

$redirect="";

if(isset($_GET['redirect'])){
    $redirect="profile.php";
}else{
    $redirect="plants.php";
}

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
$isPremium=$row['isPremium'];
$premium="";
if($isPremium==0){
    $premium="No";
}
else{
    $premium="Yes";
}
$posted=date('M j Y g:i A', strtotime($row['created']));

// updating views

$no_of_views=$row['views'];
if($no_of_views==NULL){
    $no_of_views=1;
}
else{
    $no_of_views++;
}

$current_views=$no_of_views;
$sql="update plants set views=$no_of_views where id='$plant_id'";
$result=mysqli_query($connection,$sql);


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

    .timestamp{
        font-size: 0.8em;
    }
</style>
<body>


<div class="container">
    <div class="d-flex justify-content-start">
        <button class="btn btn-dark mb-5 float-right"><a href="<?php echo $redirect ?>" style="text-decoration: none" class="text-light" >Go back</a></button>
    </div>
    <div class="row">
        <div class="col-md-5 shadow-lg p-3">
            <img class="plant-image" src="<?php echo $image?>" alt="">
        </div>
        <div class="col-md-6 shadow-lg plant-details">
            <h1><?php echo $name?></h1>

            <div class="d-flex align-items-center p-2 mb-4">
                <a class="rounded-buttonCreator">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <p class="pad"><i>created by <?php echo $username. " on ".$posted?></i></p>
            </div>

            <h5 class="p-1"><strong>Category: </strong><?php echo $category?></h5>
            <h5 class="p-1"><strong>Type: </strong><?php echo $type?></h5>
            <h5 class="p-1"><strong>Color: </strong><?php echo $color?></h5>
            <h5 class="p-1"><strong>Age in weeks: </strong><?php echo $age?></h5>
            <h5 class="p-1"><strong>Height in meters: </strong><?php echo $height?></h5>
            <h5 class="p-1"><strong>is Premium: </strong><?php echo $premium?></h5>
            <br>
            <br>
        </div>
    </div>

    <br>
    <div class="d-flex align-items-center justify-content-start">
        <a class="rounded-buttonLike" href="like.php? plant_id=<?php echo $plant_id?> & no_of_views=<?php echo $no_of_views?>">
            <ion-icon size="small"  name="heart-outline"></ion-icon>
        </a>

        <p class="pad">
            <?php
            include "connection.php";
            $sql="select * from plants where id='$plant_id'";
            $result = mysqli_query($connection, $sql);
            $data = mysqli_fetch_assoc($result);

            $no_of_likes=$data['likes'];

            if($no_of_likes==NULL){
                echo '0 Likes';
            }
            elseif($no_of_likes==1){
                echo "1 Like";
            }
            else{
                echo $no_of_likes .' Likes';
            }
            ?>

        </p>
        <a class="rounded-buttonComment">
            <ion-icon size="small" name="chatbox-outline"></ion-icon>
        </a>
        <p class="pad">
            <?php
            // xampp mariaDB count not working
            include "connection.php";
            $sql="select * from comments where plantID='$plant_id'";
            $result = mysqli_query($connection,$sql);
            $counter=0;
            while ($row=mysqli_fetch_assoc($result)){
                $counter++;
            }

            if($counter==NULL){
                echo "0 Comments";
            }
            elseif ($counter==1){
                echo "1 Comment";
            }
            else{
                echo $counter ." Comments";
            }

            ?>
        </p>

        <a class="rounded-buttonView">
            <ion-icon size="small" name="eye-outline"></ion-icon>
        </a>
        <p class="pad">

            <?php

            if($current_views==NULL){
                echo "0 Views";
            }
            elseif ($current_views==1){
                echo "1 View";
            }
            else{
                echo $current_views ." Views";
            }
            ?>
        </p>
    </div>

    <br>

    <h1 class="my-4">Comments</h1>
    <hr class="my-4">

    <?php

    $sql="select commenter,comment,created from comments where plantID='$plant_id'";
    $result=mysqli_query($connection,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
    $commenter = $row['commenter'];
    $comment=$row['comment'];
    $time=date('M j Y g:i A', strtotime($row['created']));
        echo '
<p class="timestamp"><i>'.$commenter.' posted on '.$time.'</i></p>
         <div class="d-flex my-d-flex">
        <div class="circle">
            <div class="circle-txt">
                <h2 class="user">'.$commenter[0].'</h2>
            </div>
        </div>
        <div class="shadow p-2 mb-5 bg-light rounded">'.$comment.'</div>
    </div>
        ';
    }

    ?>
    <?php
    if(isset($_SESSION['sign-in-sign-out'])){
        echo '<form class="mb-4" action="comment.php">
        <div class="mb-3">
            <input type="hidden" id="disabledTextInput" class="form-control" name="plant_id" value="'.$plant_id.'">
            <input type="hidden" id="disabledTextInput_" class="form-control" name="redirect" value="'.$redirect.'">
            <label for="comment">Leave a comment</label>
            <input type="text" required class="form-control" name="comment" id="comment" placeholder="comment here..">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Comment</button>
    </form>';
    }
    else{
        echo '<form class="mb-4" action="comment.php">
        <div class="mb-3">
            <input type="hidden" id="disabledTextInput" class="form-control" name="plant_id" value="'.$plant_id.'">
            <label for="guestName">Name</label>
            <input type="text" required class="form-control mb-4" name="guestName" id="guestName" placeholder="mr. guest..">
            <label for="comment">Leave a comment</label>
            <input type="text" required class="form-control" name="comment" id="comment" placeholder="comment here..">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Comment</button>
    </form>';
    }

    ?>

</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

