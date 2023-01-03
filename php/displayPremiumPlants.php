<div class="container my-5">
    <button class="btn btn-dark shadow my-3"><a style="text-decoration: none" href="
    <?php if (isset($_SESSION['sign-in-sign-out'])) {
            echo '_createPlant.php? premiumPlant=1';
        } else {
            echo "register.php";
        } ?>
    " class="text-light">Create Plant</a></button><br>

    <?php
    if(isset($_GET['submit'])) {
        $category_ = $_GET['category'];
        $type_ = $_GET['type'];
        $height_ = $_GET['height'];
        $age_ = $_GET['age'];
        $color_=$_GET['color'];
        $counter=0;


        include "connection.php";

        $sql="select * from plants where category='$category_' or type='$type_' or age between 0 and '$age_' or height between 0 and '$height_' or color='$color_'";
        $result=mysqli_query($connection,$sql);

        while($row=mysqli_fetch_assoc($result)){
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
            $premiumPlant_=$row['isPremium'];
            $showPremiumLabel="";
            if($premiumPlant_!=0){
                $showPremiumLabel_="Yes";
            }else{
                $showPremiumLabel_="No";
                continue;
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
                    <p class="p-0.5"><strong>Premium:</strong> '.$showPremiumLabel_.'</p>
                </div>'?>
            <?php
            if(isset($_SESSION['sign-in-sign-out'])){

                echo ' <div class="card-footer">
              <a class="rounded-button2" href="editPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="create-outline"></ion-icon>
             </a>
             <a class="rounded-button" href="deletePlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="trash-outline"></ion-icon>
             </a>
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
              </div>';
            }else{
                echo ' <div class="card-footer">
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.'">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
              </div>';
            }
            ?>
            <?php echo '  </div>
           
        </div>';
            $counter++;
        }
        if($counter==0){
            echo '<h2>No results found!</h2>';
        }
    }
    elseif (isset($_GET['sortSubmit'])) {

        include "connection.php";
        if(isset($_GET['views_ascending'])){
            $sql="select * from plants order by views ASC limit 10";
            echo '<h2 class="mb-3">Views ascending order</h2>';
        }
        if(isset($_GET['views_descending'])){
            $sql="select * from plants order by views DESC limit 10";
            echo '<h2 class="mb-3">Views descending order</h2>';
        }
        if(isset($_GET['likes_ascending'])){
            $sql="select * from plants order by likes ASC limit 10";
            echo '<h2 class="mb-3">Likes ascending order</h2>';
        }
        if(isset($_GET['likes_descending'])){
            $sql="select * from plants order by likes DESC limit 10";
            echo '<h2 class="mb-3">Likes descending order</h2>';
        }
        if(isset($_GET['sort_NewToOld'])){
            $sql="select * from plants order by created DESC limit 10";
            echo '<h2 class="mb-3">Newest to oldest</h2>';
        }
        if(isset($_GET['sort_OldToNew'])){
            $sql="select * from plants order by created ASC limit 10";
            echo '<h2 class="mb-3">Oldest to newest</h2>';
        }

        $result=mysqli_query($connection,$sql);

        while($row=mysqli_fetch_assoc($result)){
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
            $likes=$row['likes'];
            $premiumPlant=$row['isPremium'];
            $showPremiumLabel="";
            if($premiumPlant==0){
                $showPremiumLabel="No";
                continue;
            }else{
                $showPremiumLabel="Yes";
            }


            if($likes==NULL){
                $likes=0;
            }
            $views=$row['views'];
            if($views==NULL){
                $views=0;
            }
            $created_=date('M j Y g:i A', strtotime($row['created']));

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
                    <p class="p-0.5"><strong>Likes:</strong> '.$likes.'</p>
                    <p class="p-0.5"><strong>Views:</strong> '.$views.'</p>
                    <p class="p-0.5"><strong>posted on:</strong> '.$created_.'</p>
                    <p class="p-0.5"><strong>Premium:</strong> '.$showPremiumLabel.'</p>
                </div>'?>
            <?php
            if(isset($_SESSION['sign-in-sign-out'])){

                echo ' <div class="card-footer">
              <a class="rounded-button2" href="editPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="create-outline"></ion-icon>
             </a>
             <a class="rounded-button" href="deletePlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="trash-outline"></ion-icon>
             </a>
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.' ">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
              </div>';
            }else{
                echo ' <div class="card-footer">
             <a class="rounded-buttonView" href="viewPlant.php? plant_id='.$plant_id.' & plant_user='.$plant_user.'">
                 <ion-icon size="large" name="eye-outline"></ion-icon>
             </a>
              </div>';
            }
            ?>
            <?php echo '  </div>
           
        </div>';
        }
    }else
    {
        include "displayPlants2.php";
    }

    ?>
</div>
