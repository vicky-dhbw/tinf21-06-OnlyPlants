<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/popup_style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="popup" id="popup">
        <img src="_tick.png">
        <h2>Thank You!</h2>
        <p>Your details has been successfully submitted. Thanks!</p>
        <a href="http://localhost/tinf21-06-OnlyPlants/php/signin.php"><button type="button" onclick="closePopup()">Fuck me</button></a>
    </div>
</div>
<script>
    let popup=document.getElementById("popup");

    function openPopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }
</script>
</body>
</html>

