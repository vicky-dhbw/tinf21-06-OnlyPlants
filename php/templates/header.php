<?php
if($sign_in_sign_out==1){
    $is_signed_in="SIGN OUT";
}else{
    $is_signed_in="SIGN IN";
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
    <link rel="stylesheet" href="../css/headerstyle.css">
</head>
<body>
<header>
    <img class="logo" src="<?php echo $Logo?>" alt="logo" height="100" width="250">
    <nav>
        <ul class="nav_links">
            <li><a class="<?php echo $currentPage == 'index' ? 'active' : ''?>" href="<?php echo $home_page; ?>">Home</a></li>
            <li><a class="<?php echo $currentPage == 'plants' ? 'active' : ''?>" href="<?php echo $plants_page; ?>">Plants</a></li>
            <li><a class="<?php echo $currentPage == 'premiumContent' ? 'active' : ''?>" href="<?php echo $premiumContent_page;?>">Premium Contents</a></li>
            <li><a class="<?php echo $currentPage == 'contact' ? 'active' : ''?>" href="<?php echo $contact_page;?>">Contact</a></li>
            <li><a href="">Something</a></li>
        </ul>
    </nav>
    <form method="post" action="<?php echo $controlButtonPage ?>">
        <button type="submit" name="signInButton" >
            <?php echo $is_signed_in?>
        </button>
    </form>
</header>

</body>
</html>