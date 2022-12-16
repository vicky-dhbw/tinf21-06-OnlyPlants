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
$contact_page="#";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='contact';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include __DIR__.'/templates/nav.php'; ?>

<style>
    .form-container {
        margin: 100px;
        padding: 20px;
        border: 1px solid #ccc;
    }
</style>
<div class="form-container">
    <h1>Contact Page</h1>
    <form action="" method="post">
        <p>Please read our <a href="/privacy-policy.html">privacy policy</a> before filling out the form.</p>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
            <input type="checkbox" id="privacy-policy" name="privacy-policy" required>
            <label for="privacy-policy">I have read the <a href="/privacy-policy.html">privacy policy</a> and agree to the processing of my data according to the privacy policy.</label>
        </div>
        <button type="submit" class="btn btn-primary">Send message</button>
        <?php
        if (isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['privacy-policy'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $to = "info@onlyplants.com";
            $subject = "New message from $name";
            $body = "You have received a new message from $name.\n\n".
                "Email address: $email\n\n".
                "Message:\n$message";

            // Send email
            if (mail($to, $subject, $body)) {
                echo "<p>Thank you for your message. We will contact you soon.</p>";

                // Delete user data after successful message send
                unset($_POST['name']);
                unset($_POST['email']);
                unset($_POST['message']);
                unset($_POST['privacy-policy']);
            } else {
                echo "<p>Sorry, there was an error sending the message. Please try again later.</p>";
            }
        }
        ?>
    </form>
</div>


<div class="container">
    <?php
    echo "STATUS: ".$sign_in_sign_out."<br>";
    echo "USER: ".$user."<br>";
    echo "USER ".$is_signed_in;

    ?>
</div>

</body>
</html>