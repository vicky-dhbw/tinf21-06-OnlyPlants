<?php
session_start();
if (isset($_SESSION['sign-in-sign-out'])) {
    $sign_in_sign_out = $_SESSION['sign-in-sign-out'];
    $user = $_SESSION['user'];
} else {
    $sign_in_sign_out = 0;
    $user = "no user";
}
$Logo = "../assets/images/logo_.png";
$plants_page = "#";
$premiumContent_page = "premiumContent.php";
$contact_page = "contact.php";
$home_page = "../index.php";
$signin_page = "signin.php";
$controlButtonPage = 'controlButton.php';
$currentPage = 'plants';
$admin_page = "adminPage.php";
$profile = "profile.php";

$showAlert = 0;
if (isset($_SESSION['alert'])) {
    $showAlert = $_SESSION['alert'];
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plants</title>
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowsmall.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/buttonStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style>
        .filter-div{
            background-color:#C0DDB3;
            padding-top: 20px;
            padding-bottom: 10px;
            color: black;
        }
        .alertDiv{
            margin-top: 60px;
            padding: 0;
        }
        .container-fluid{
            aspect-ratio: 1:1;
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .layer2 {

        }
        .filter-div{
            background-color:#C0DDB3;
            padding-top: 20px;
            padding-bottom: 10px;
            color: black;
        }
        .filter-div2{
            background-color: #B3D8DD;
            padding-top: 20px;
            padding-bottom: 10px;
            color: black;
        }
        .explore{
            font-size: 3vw;
        }
    </style>
    <?php include __DIR__ . '/templates/nav.php'; ?>

    <div class="container-fluid layer2">
        <div class="alertDiv">
            <br>
            <br>
            <br>
            <?php
            if (isset($_SESSION['alert'])) {
                if ($showAlert == 1) {
                    echo '<div class="alert alert-danger" role="alert">
  Plant could not be deleted!
</div>';
                } elseif ($showAlert == 2) {
                    echo '<div class="alert alert-success" role="alert">
  Plant deleted successfully!
</div>';
                } elseif ($showAlert == 3) {
                    echo '<div class="alert alert-success" role="alert">
  Plant updated successfully!
</div>';
                } elseif ($showAlert == 4) {
                    echo '<div class="alert alert-danger" role="alert">
  Oops! Plant could not be updated!
</div>';
                }
                elseif ($showAlert == 5) {
                    echo '<div class="alert alert-primary" role="alert">
  Plant successfully added to your favorite list! 
</div>';
                }
                elseif ($showAlert == 6) {
                    echo '<div class="alert alert-primary" role="alert">
  Plant already in your favorite list! 
</div>';
                }

                $_SESSION['alert'] = 0;
            }


            ?>
        </div>


        <div class="container my-3">
            <h1 class="explore">Explore Plants</h1>
        </div>

        <div class="container my-5 shadow-lg p-2">

            <h2>Filter/Sorter</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Filter plants
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse filter-div p-4" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <table id="table1">
                            <tr>
                                <th>
                                    <h1 class="h1">Plant Filter</h1>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <form method="get" class="f1" action="plants.php">
                                        <label class="c1">category:
                                            <select name="category" class="c2">
                                                <option value="none"> none </option>
                                                <option value="balcony flowers">balcony flowers</option>
                                                <option value="medicinal plants">medicinal plants</option>
                                                <option value="pot plants">pot plants</option>
                                                <option value="summer flowers">summer flowers</option>
                                                <option value="wild plants">wild plants</option>
                                                <option value="indoor plants">indoor plants</option>
                                            </select>
                                        </label>
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
                                    <input type="number" placeholder="height (m)" name="height" step="1" class="c2">
                                </label>
                                <label class="c1">age:
                                    <input type="number" placeholder="age (weeks)" name="age" step="1" class="c2">
                                </label>
                            </span>
                                        <span class="buttonspan">
                                <button type="submit" name="submit" class="b1">submit</button><button type="reset" class="b1">reset</button>
                                    <button class="b1"><a href="plants.php"></a>Show all</button>

                            </span>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Sort Plants
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse filter-div2 p-4" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <form method="get">
                            <h2 class="h1">Plant Sorter</h2>
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex align-items-start flex-column mb-3">
                                        <h5>Views</h5>

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="views_ascending" value="views_ascending" class="checkbox form-check-input p-2" id="1" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">ascending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="views_descending" class="checkbox form-check-input p-2" id="2" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">descending</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col">

                                    <div class="d-flex align-items-start flex-column mb-3">
                                        <h5>Likes</h5>

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="likes_ascending" class="checkbox form-check-input p-2" id="3" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">ascending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="likes_descending" class="checkbox form-check-input p-2" id="4" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">descending</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col">

                                    <div class="d-flex align-items-start flex-column mb-3">
                                        <h5>Sort by</h5>

                                        <div class="d-flex">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="sort_NewToOld" class="checkbox form-check-input p-2" id="5" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">newest to oldest</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="sort_OldToNew" class="checkbox form-check-input p-2" id="6" onchange="checkChange()">
                                                <label class="form-check-label" for="inlineCheckbox1">oldest to newest</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="sortSubmit" class="b1">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>
            let checkbox = document.querySelectorAll('.checkbox')
            let b = false;
            function checkChange(){
                b = !b
                if(b){
                    for(let i = 0 ; i< checkbox.length; i++){
                        if(checkbox[i].checked === false){
                            checkbox[i].disabled = 'true';
                        }
                    }
                }else{
                    for(let i = 0 ; i< checkbox.length; i++){
                        checkbox[i].removeAttribute('disabled');
                    }

                }
            }
        </script>

        <!-- filter einklappbar und ausklappbar machen, um platz zu sparen-->

        <div class="container my-5">
            <button class="btn btn-dark shadow my-3"><a style="text-decoration: none" href="
    <?php if (isset($_SESSION['sign-in-sign-out'])) {
                    echo "_createPlant.php";
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
                $prem=0;


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
                    if($premiumPlant_!=1){
                        $showPremiumLabel_="No";
                    }else{
                        $showPremiumLabel_="Yes";
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
                        $premiumPlant_=$row['isPremium'];
                        $showPremiumLabel="";
                        if($premiumPlant_!=1){
                            $showPremiumLabel_="No";
                        }else{
                            $showPremiumLabel_="Yes";
                            continue;
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
                    <p class="p-0.5"><strong>Premium:</strong> '.$showPremiumLabel_.'</p>
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
           
        </div>';
            }
            }else
            {
                include "displayPlants.php" ;
            }

            ?>
        </div>
    </div>


    <?php include __DIR__ . '/templates/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>