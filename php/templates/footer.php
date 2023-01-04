<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>



<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p>
                OnlyPlants is an online platform for plant lovers to buy and sell unique plants
                from around the world. Our team of experienced gardeners and plant enthusiasts are
                dedicated to the care and propagation of plants. We offer a platform for plant
                lovers to share their passion and make the world a greener place. We look forward
                to helping you expand your collection.
                </p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a class="<?php echo $currentPage == 'plants' ? 'active' : ''?>" href= "<?php echo $plants_page; ?>" onclick="showPlantImageDuringTransition();">Plants</a></li>
                    <li><a class="<?php echo $currentPage == 'premiumContent' ? 'active' : ''?>" href="<?php echo $premiumContent_page;?>" onclick="showPlantImageDuringTransition();">Premium Plants</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                   <!-- <li><a href="php/aboutUs.php">About Us</a></li> -->
                    <li><a href="<?php echo $contact_page?>">Contact Us</a></li>
                    <li><a href="<?php echo $imprint?>">Imprint</a></li>
                    <li><a href="<?php echo $privacyPolicy?>">Privacy Policy</a></li>
                    <li><a href="<?php echo $termsOfUse?>">Terms of use</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2022 OnlyPlants

                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
            </div>
        </div>
    </div>
</footer>