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
$Logo="../assets/images/Logo.png";
$plants_page="#";
$premiumContent_page="premiumContent.php";
$contact_page="contact.php";
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
</head>
<body>
<?php include __DIR__.'/templates/header.php'; ?>
<div class="container">
    <h1>Contact Page</h1>
    <div class="form-container">
        <form action="" method="post">
            <p>Bitte lesen Sie unsere <a href="/datenschutzerklaerung.html">Datenschutzerklärung</a>, bevor Sie das Formular ausfüllen.</p>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email-Adresse:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="datenschutz" name="datenschutz" required>
                <label for="datenschutz">Ich habe die <a href="/datenschutzerklaerung.html">Datenschutzerklärung</a> gelesen und stimme der Verarbeitung meiner Daten gemäß der Datenschutzerklärung zu.</label>
            </div>
            <button type="submit" class="btn btn-primary">Nachricht senden</button>

            <?php
            if (isset($_POST['name'], $_POST['email'], $_POST['message'], $_POST['datenschutz'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $to = "info@onlyplants.de";
                $subject = "Neue Nachricht von $name";
                $body = "Sie haben eine neue Nachricht von $name erhalten.\n\n".
                    "Email-Adresse: $email\n\n".
                    "Nachricht:\n$message";

                // Email senden
                if (mail($to, $subject, $body)) {
                    echo "<p>Vielen Dank für Ihre Nachricht. Wir werden uns bald bei Ihnen melden.</p>";

                    // Löschen der Nutzerdaten nach erfolgreichem Senden der Nachricht
                    unset($_POST['name']);
                    unset($_POST['email']);
                    unset($_POST['message']);
                    unset($_POST['datenschutz']);
                } else {
                    echo "<p>Leider ist ein Fehler beim Senden der Nachricht aufgetreten. Bitte versuchen Sie es später erneut.</p>";
                }
            }
            ?>
        </form>
    </div>
</div>
<?php
echo "STATUS: ".$sign_in_sign_out."<br>";
echo "USER: ".$user."<br>";
echo "USER ".$is_signed_in;

?>
</body>
</html>