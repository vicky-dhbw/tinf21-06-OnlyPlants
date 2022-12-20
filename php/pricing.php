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
$plants_page="#";
$premiumContent_page="premiumContent.php";
$plants_page="plants.php";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='plants';
$admin_page="adminPage.php";
$profile="profile.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowsmall.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<style>
    section.pricing {
  background: #327d4b;
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }

  .pricing .card:hover .btn {
    opacity: 1;
  }
}
    }
</style>
<?php include __DIR__.'/templates/nav.php'; ?>

<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Unregistered</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Look at Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can't write Comments</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can't create new Plants</li>
            </ul>
            <div class="d-grid">
              <a href="http://localhost/tinf21-06-OnlyPlants/index.php" class="btn btn-success text-uppercase">Go to Main Page</a>
			  <br>
            </div>
			<img src="../assets/images/ground.jpg">
          </div>
        </div>
      </div>
      <!-- Registered Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Registered</h5>
            <h6 class="card-price text-center">$10<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Look at Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can write Comments</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can create a new Plant</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Delete created Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Like or Dislike Plants</li>
            </ul>
            <div class="d-grid">
              <a href="http://localhost/tinf21-06-OnlyPlants/php/signin.php" class="btn btn-success text-uppercase">Sign in</a>
			  <br>
            </div>
			<img src="../assets/images/sapling.jpg";>
			</div>
        </div>
      </div>
      <!-- Premium Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Look at Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can write Comments</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Can create a new Plant</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Delete created Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Like or Dislike Plants</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Look at Premium Content</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn btn-success text-uppercase">Get Premium</a>
			  <br>
            </div>
			<img src="../assets/images/plantPricing.jpg">
		   </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>