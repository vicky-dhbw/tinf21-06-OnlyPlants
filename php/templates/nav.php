<?php
if($sign_in_sign_out==1){
    $is_signed_in="Sign out";
}else{
    $is_signed_in="Sign in";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
    *{
        box-sizing: border-box;
        margin:0;
        padding:0;
    }
    .nav_links{
        list-style: none;
    }

    .nav_links li{
        display: inline-block;
        padding: 20px 20px;
    }
    .nav_links li a{
        transition: all 0.3s ease 0s;
        color: white;
        font-family: "Montserrat", sans-serif;
        text-decoration: none;
    }
    @media (max-width: 900px){
        .nav_links{
            display: none;
        }
    }
    }
</style>
<body>
<h1>Hello, world!</h1>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo $Logo?>" alt="Logo" width="200" height="67" class="d-inline-block align-text-top">
        </a>
        <ul class="nav_links">
            <li><a class="<?php echo $currentPage == 'index' ? 'active' : ''?>" href="<?php echo $home_page; ?>">Home</a></li>
            <li><a class="<?php echo $currentPage == 'plants' ? 'active' : ''?>" href="<?php echo $plants_page; ?>">Plants</a></li>
            <li><a class="<?php echo $currentPage == 'premiumContent' ? 'active' : ''?>" href="<?php echo $premiumContent_page;?>">Premium Contents</a></li>
            <li><a class="<?php echo $currentPage == 'contact' ? 'active' : ''?>" href="<?php echo $contact_page;?>">Contact</a></li>
            <li><a href="">Something</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Only Plants</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class=" offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'index' ? 'active' : ''?>" aria-current="page" href="<?php echo $home_page; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'plants' ? 'active' : ''?>" href="<?php echo $plants_page; ?>">Plants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'premiumContent' ? 'active' : ''?>" href="<?php echo $premiumContent_page;?>">Premium Contents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'contact' ? 'active' : ''?>" href="<?php echo $contact_page;?>">Contact</a>
                    </li>

                </ul>
                <br>
                <form method="post" class="d-flex mt-3"  action="<?php echo $controlButtonPage ?>">
                    <button class="btn btn-success" type="submit" name="signInButton"><?php echo $is_signed_in?></button>
                </form>

            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>