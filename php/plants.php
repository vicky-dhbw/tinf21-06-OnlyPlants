<?php
session_start();
$_SESSION['Logo']="../assets/images/Logo.png";
$_SESSION['plants_page']="#";
$_SESSION['premiumContent_page']="premiumContent.php";
$_SESSION['contact_page']="contact.php";
$_SESSION['home_page']="../index.php";
$_SESSION['signin_page']="signin.php";
$_SESSION['controlButtonPage']='controlButton.php';
$currentPage='plants';
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
</head>
<body>
<?php include __DIR__.'/templates/header.php'; ?>
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
<!-- filter einklappbar und ausklappbar machen, um platz zu sparen-->
<?php
$color = $_GET["color"]??"Standardwert";
$height = $_GET["height"]??"Standardwert";
echo $color." ".$height;
echo"<br>";
echo "STATUS: ".$_SESSION['sign-in-sign-out']."<br>";
echo "USER: ".$_SESSION['user']."<br>";
echo "USER ".$_SESSION['is_signed_in'];
?>
</body>
</html>
