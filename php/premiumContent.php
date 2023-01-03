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
$premiumContent_page="#";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='premiumContent';
$admin_page="adminPage.php";
$profile="profile.php";
$number=0;

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
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowsmall.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/buttonStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<style>
    .MyContainer{
        margin-top: 150px;
    }
    .filter-div{
        background-color:#C0DDB3;
        padding-top: 20px;
        padding-bottom: 10px;
        color: black;
    }
    .alertDiv{
        margin-top: 60px;
        padding: 0;
    }
    .container-fluid{
        aspect-ratio: 1:1;
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .layer2 {

    }
    .filter-div{
        background-color:#C0DDB3;
        padding-top: 20px;
        padding-bottom: 10px;
        color: black;
    }
    .filter-div2{
        background-color: #B3D8DD;
        padding-top: 20px;
        padding-bottom: 10px;
        color: black;
    }
    .explore{
        font-size: 3vw;
    }
</style>
<?php include __DIR__.'/templates/nav.php'; ?>



<div class="MyContainer">

    <?php
    if(isset($_SESSION['sign-in-sign-out'])){
        $currentUserID=$_SESSION['id'];

        include "connection.php";
        $sql="select isPremium from users as isPremium where id=$currentUserID";
        $result=mysqli_query($connection,$sql);
        $data=mysqli_fetch_assoc($result);
        $premiumMember=$data['isPremium'];

        if($premiumMember==0){
            include "pricing.php";
        }
        else{
            echo '<div class="container my-3">
            <h1 class="explore">Premium Plants</h1>
        </div>';
            include "filters.php";
            include "displayPremiumPlants.php";
        }
    }
    else{
        include "pricing.php";
    }


    /*
    echo "STATUS: ".$sign_in_sign_out."<br>";
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


<?php include "templates/footer.php"?>
<script>
    let checkbox = document.querySelectorAll('.checkbox')
    let b = false;
    function checkChange(){
        b = !b
        if(b){
            for(let i = 0 ; i< checkbox.length; i++){
                if(checkbox[i].checked === false){
                    checkbox[i].disabled = 'true';
                }
            }
        }else{
            for(let i = 0 ; i< checkbox.length; i++){
                checkbox[i].removeAttribute('disabled');
            }

        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
