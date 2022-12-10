<?php
//session_start();  Wegen Fehlermeldung auskommentiert
session_start();
if($_SESSION['sign-in-sign-out']==1){
    $_SESSION['is_signed_in']="SIGN OUT";
}else{
    $_SESSION['is_signed_in']="SIGN IN";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>

    <link rel="stylesheet" href="css/headerstyle.css">
</head>
<body>
<header>
    <img class="logo" src="<?php echo $_SESSION['Logo']?>" alt="logo" height="100" width="250">
    <link rel="stylesheet" href="../css/headerstyle.css">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul class="nav_links">
            <li><a href="<?php echo $_SESSION['home_page']?>">Home</a></li>
            <li><a href="<?php echo $_SESSION['plants_page'];?>">Plants</a></li>
            <li><a href="<?php echo $_SESSION['premiumContent_page'];?>">Premium Contents</a></li>
            <li><a href="<?php echo $_SESSION['contact_page'];?>">Contact</a></li>
            <li><a href="">Something</a></li>
        </ul>
    </nav>
        <button onclick="<?php session_start(); if(isset($_SESSION['sign-in-sign-out'])){header($_SESSION['home_page']);}
        else{header($_SESSION['signin_page']);}?>">
            <?php session_start(); echo $_SESSION['is_signed_in']?>
        </button>
</header>

</body>
</html>