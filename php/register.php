<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/signin.css">
    <title>Register yourself!</title>
</head>
<style>
    .container{
        margin-top: 15rem;
    }
</style>
<body>
<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="../assets/images/plant.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <img src="../assets/images/Logo.png" alt="logo" height="100" width="250">
                <h4>Register yourself!</h4>
                <form action="process-form.php" method="post">
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="name" placeholder="enter your name" class="form-control my-2 p-2" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="email" placeholder="enter your email" class="form-control my-2 p-2" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="password" placeholder="******" class="form-control my-2 p-2" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <label>
                                <input type="radio" name="type" value="user" checked>
                                default (10$/month)
                            </label>
                        </div>
                        <div class="col-lg-7">
                            <label>
                                <input type="radio" name="type" value="premium">
                                premium (49$/month)
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="iban" placeholder="enter your IBAN" class="form-control my-2 p-2" id="ibanInput" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <label>
                                <input type="checkbox" name="acceptDirectDebit" value="accept" required>
                                I accept the direct debit payment method
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <label>
                                <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
                                I have read the <a href="legals/privacyPolicy.php">privacy policy</a> and agree to the processing of my data according to the privacy policy.
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit" class="btn1 mt-3 mb-3">register now</button>
                        </div>
                    </div>
                    <p>Already have an account? <a href="signin.php">sign in here</a></p>
                </form>
            </div>
        </div>



    </div>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<!-- a small change from example branch -->