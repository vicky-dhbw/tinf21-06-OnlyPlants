<?php
session_start();
include "connection.php";
if(isset($_SESSION['sign-in-sign-out'])){
    $sign_in_sign_out=$_SESSION['sign-in-sign-out'];
}
else{
    $sign_in_sign_out=0;
}
$Logo="../assets/images/logo_.png";
$plants_page="plants.php";
$premiumContent_page="premiumContent.php";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='plants';
$admin_page="adminPage.php";
$profile="profile.php";
$user=$_SESSION['id'][0];
$username=$_SESSION['user'];
$redirectTo="plants.php";
$isPremium=0;
if(isset($_GET['premiumPlant'])){
    $isPremium=1;
    $redirectTo="premiumContent.php";
}

if(isset($_POST['submit'])) {
    $name = $_POST['plant_name'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $age = (int)$_POST['age'];
    $height = (int)$_POST['height'];
    $image = $_FILES['file'];


    $image_filename = $image['name'];
    $image_file_temp = $image['tmp_name'];
    $filename_separate = explode('.', $image_filename);
    $file_ext = strtolower($filename_separate[1]);
    $extension = array('jpeg', 'png', 'jpg', 'svg');

    if (in_array($file_ext, $extension)) {
        $upload_image = '../assets/images/' . $image_filename;
        move_uploaded_file($image_file_temp, $upload_image);
        $sql = "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$upload_image','$isPremium')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            header("Location: $redirectTo");
        } else {
            echo '<div class="alert alert-danger" role="alert">
                  <strong>Something is fishy! We could not create your plant!</strong>
                 </div>';
            die(mysqli_error($connection));
        }
    }

}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<style>
    .container{
        margin-top: 170px;
        margin-bottom: 100px;
    }
</style>
<body>
<?php include __DIR__.'/templates/nav.php'; ?>
<div class="container">
    <div class="d-flex justify-content-between">
        <h1 class="display-4">Create Plant</h1>
        <button class="btn btn-dark mb-5 float-right"><a href="plants.php" style="text-decoration: none" class="text-light" >Go back</a></button>
    </div>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group mb-3 ">
            <label for="name">Plant name</label>
            <input type="text" required id="name" class="form-control" placeholder="Enter plant name" name="plant_name">
        </div>

        <label>Choose type</label>
        <select class="form-select mb-3" aria-label="Default select example" name="type">
            <option value="none"> none </option>
            <option value="annuals"> annuals </option>
            <option value="bulbs"> bulbs </option>
            <option value="cactus - succulents"> cactus - succulents </option>
            <option value="climbers"> climbers </option>
            <option value="conifers"> conifers </option>
            <option value="ferns"> ferns </option>
            <option value="fruit"> fruit </option>
            <option value="vegetables">vegetables</option>
            <option value="herbs"> herbs </option>
            <option value="ornamental grasses"> ornamental grasses </option>
            <option value="perennials"> perennials </option>
            <option value="roses"> roses </option>
            <option value="shrubs"> shrubs </option>
            <option value="trees"> trees </option>
            <option value="palms - cycads"> palms - cycads </option>
            <option value="bamboos"> bamboos </option>
            <option value="aquatic plants"> aquatic plants </option>
            <option value="orchids"> orchids </option>
        </select>

        <label>Choose category</label>
        <select name="category" class="form-select mb-3" aria-label="Default select example">
            <option value="none"> none </option>
            <option value="balcony flowers">balcony flowers</option>
            <option value="medicinal plants">medicinal plants</option>
            <option value="pot plants">pot plants</option>
            <option value="summer flowers">summer flowers</option>
            <option value="wild plants">wild plants</option>
            <option value="indoor plants">indoor plants</option>
        </select>

        <label>Choose color</label>
        <select class="form-select mb-3" aria-label="Default select example" name="color">
            <option value="none"> none </option>
            <option value="blue">blue</option>
            <option value="brown">brown</option>
            <option value="yellow">yellow</option>
            <option value="green">green</option>
            <option value="mixed">mixed</option>
            <option value="orange">orange</option>
            <option value="pink">pink</option>
            <option value="red">red</option>
            <option value="violet">violet</option>
            <option value="white">white</option>
        </select>

        <div class="mb-3">
            <label class="form-label" for="age-regulator">Age</label><br>
            <input id="age-regulator" type="range" name="rangeInput" min="0" max="1000" required onchange="updateTextInput(this.value);">
            <input type="text" class="form-control" id="textInput" value="" name="age" placeholder="age in months">
        </div>

        <div class="mb-3">

            <label class="form-label" for="height-regulator">Height</label><br>
            <input id="height-regulator" type="range" name="rangeInput" min="0" required max="100" onchange="updateTextInput2(this.value);">
            <input type="text" class="form-control" id="textInput_" value="" name="height" placeholder="height in meters">
        </div>


        <div class="mb-3">
            <input class="form-control" type="file" id="formFile" name="file">
        </div>

        <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<script>
    function updateTextInput(val) {
        document.getElementById('textInput').value=val;
    }
    function updateTextInput2(val) {
        document.getElementById('textInput_').value=val;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
