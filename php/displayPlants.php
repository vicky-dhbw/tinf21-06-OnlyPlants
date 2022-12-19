<?php
session_start();
include "connection.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<div class="container-fluid">
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

    $sql="select * from plants";
    $result=mysqli_query($connection,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $type = $row['type'];
        $category = $row['category'];
        $color = $row['color'];
        $age = $row['age'];
        $height = $row['height'];
        $image = $row['url'];
        $username=$row['username'];
        $plant_id=$row['id'];
        $plant_user=$row['userid'];
        echo '
    <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="'.$image.'">
                </div>
                <div class="card-body">
                    <p>Name: '.$name.'</p>
                    <p>Created by: '.$username.'</p>
                    <p>Category: '.$category.'</p>
                    <p>Color: '.$color.'</p>
                    <p>Age: '.$age.'</p>
                </div>
                <div class="card-footer">
                    <button class="btn_">Edit</button>
                    <button class="btn_ btn-outline"><a style="text-decoration: none" class="text-dark" href="deletePlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">Delete</a></button>
                </div>
            </div>
           
        </div>
    
    ';
    }

    ?>

</div>
<?php

echo "<br>";
echo "<br>";
echo "<br>";
if(isset($_SESSION['id'])){
    echo $userid;
}

?>

</body>
</html>



