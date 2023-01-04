<?php

include "connection.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Only Plants</title>
    <link rel="icon" href="../favicon.png">
</head>
<body>


<div class="container-fluid">
    <?php
    $sql="select * from plants where isPremium=0";
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
        $premiumPlant=$row['isPremium'];
        $showPremiumLabel="";
        if($premiumPlant==0){
            $showPremiumLabel="No";
        }else{
            $showPremiumLabel="Yes";
        }
        echo '
    <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="'.$image.'">
                </div>
                <div class="card-body">
                    <h5 class="p-2"><strong>'.$name.'</strong> </h5>
                    <p class="p-0.5"><strong>Created by</strong>: '.$username.'</p>
                    <p class="p-0.5"><strong>Category:</strong> '.$category.'</p>
                    <p class="p-0.5"><strong>Type:</strong> '.$type.'</p>
                    <p class="p-0.5"><strong>Color:</strong> '.$color.'</p>
                    <p class="p-0.5"><strong>Age:</strong> '.$age.' weeks</p>
                    <p class="p-0.5"><strong>Height:</strong> '.$height.' metres</p>
                    <p class="p-0.5"><strong>Premium:</strong> '.$showPremiumLabel.'</p>
                </div>'?>
    <?php
    if(isset($_SESSION['sign-in-sign-out'])){

        echo ' <div class="card-footer">
              <a class="rounded-button2" href="editPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirectEdit=plants.php">
                 <ion-icon size="large" name="create-outline"></ion-icon>
             </a>
             <a class="rounded-button" href="deletePlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirectDelete=plants.php">
                 <ion-icon size="large" name="trash-outline"></ion-icon>
             </a>
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirect=plants.php">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
             <a class="rounded-button-Add" href="favorite.php? plant_id='.$plant_id.' & redirectFav=plants.php">
                 <ion-icon size="large" name="add-outline"></ion-icon>
             </a>
              </div>';
    }else{
        echo ' <div class="card-footer">
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' & redirect=plants.php">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
              </div>';
    }
        ?>
    <?php echo '  </div>
           
        </div>';}

    mysqli_close($connection);
    ?>

</div>


</body>
</html>



