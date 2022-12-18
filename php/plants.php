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
    <title>Plants</title>
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowsmall.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<style>
    .plant_div{
        margin-top: 170px;
        padding: 0;
    }
</style>
<?php include __DIR__.'/templates/nav.php'; ?>



<div class="plant_div">
    <details open=""><summary class="openclose"><b>Category/Filter</b></summary>
        <table id="table1">
            <tr>
                <th><h1 class="h1">Category</h1></th>
                <th><h1 class="h1">Plant Filter</h1></th>
            </tr>
            <tr>
                <td>
                    <form method="get" class="f1">
                    <span class="spanlinebreak">
<select name="category" class="c2">
    <option value="none"> none </option>
    <option value="balcony flowers">balcony flowers</option>
    <option value="medicinal plants">medicinal plants</option>
    <option value="pot plants">pot plants</option>
    <option value="summer flowers">summer flowers</option>
    <option value="wild plants">wild plants</option>
    <option value="indoor plants">indoor plants</option>
</select>
</span>
                        <span class="buttonspan">
<button type="submit" class="b1">submit</button><button type="reset" class="b1">reset</button>
</span>
                    </form>
                </td>
                <td>
                    <form method="get" class="f1">
                        <label class="c1">type:
                            <select name="type" class="c2">
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
                                <option value="bamboos"> bambooos </option>
                                <option value="aquatic plants"> aquatic plants </option>
                                <option value="orchids"> orchids </option>
                            </select>
                        </label>
                        <label class="c1"> color:
                            <select name="color" class="c2">
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
                        </label>
                        <span class="spanlinebreak">
    <label class="c1">height:
    <input type="number" placeholder="height (cm)" name="height" step="0.1" class="c2">
    </label>
    <label class="c1">age:
    <input type="number" placeholder="age (weeks)" name="age" step="1" class="c2">
    </label>
    </span>
                        <span class="buttonspan">
    <button type="submit" class="b1">submit</button><button type="reset" class="b1">reset</button>
</span>
                    </form>
                </td>
            </tr>
        </table>
    </details>
    <div>

    </div>
</div>

<!-- filter einklappbar und ausklappbar machen, um platz zu sparen-->

<div class="container">
    <?php
    $color = $_GET["color"]??"Standardwert";
    $height = $_GET["height"]??"Standardwert";
    echo $color." ".$height;

    echo "STATUS: ".$sign_in_sign_out."<br>";
    echo "<br>";
    echo "USER ".$is_signed_in;
    echo "<br>";
    echo "USER: ".$_SESSION['user']."<br>";
    echo "ID: ".$_SESSION['id']."<br>";
    echo "TYPE: ".$_SESSION['type']."<br>";
    echo "<br>";

    ?>
</div>


<div class="myDiv">

    <button class="btn btn-dark my-3"><a style="text-decoration: none" href="_createPlant.php" class="text-light">Create user</a></button>
    <?php
    $names=['leaf_sky.jpg','cute.jpg','leaves.jpg','img3.jpg'];
    foreach ($names as $name){ ?>
        <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="<?php echo "../assets/images/". $name?>">
                </div>
                <div class="card-body">
                    <p>Name: </p>
                    <p>Category: </p>
                    <p>Created by: </p>
                    <p>Age: </p>
                </div>
                <div class="card-footer">
                    <button class="btn_">Edit</button>
                    <button class="btn_ btn-outline">Delete</button>
                </div>
            </div>
        </div>
    <?php }
    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>
