<?php
include "connect.php";
if(isset($_POST['submit'])){
    $name=$_POST['plant_name'];
    $type=$_POST['type'];
    $category=$_POST['category'];
    $color=$_POST['color'];
    $age=(int)$_POST['age'];
    $height=(int)$_POST['height'];
    $plant_url=$_POST['plant_url'];

    var_dump($plant_url);

    $sql="insert into plants (name,type,category,color,age,height,url) values('$name','$type','$category','$color','$age','$height','$plant_url')";
    $result=mysqli_query($con,$sql);


    if($result){
        header("Location: display.php");
    }else{
        die(mysqli_error($con));
    }

    echo $name. "<br>";
    echo $type. "<br>";
    echo  $category. "<br>";
    echo $color. "<br>";
    echo $age. "<br>";
    echo $height. "<br>";
    echo $plant_url. "<br>";
    var_dump(is_int($age));
    var_dump(is_int($height));
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
<body>

<div class="container my-5">
    <h1 class="display-4">Create Plant</h1>
    <form method="post">
        <div class="form-group mb-3">
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


        <div class="mb-3 my-3">
            <label for="formFile" class="form-label">Plant url</label>
            <input class="form-control mb-3" required type="file" id="formFile" name="plant_url">
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
</body>
</html>
