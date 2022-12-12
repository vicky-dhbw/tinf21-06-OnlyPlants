<?php
$Logo="../assets/images/Logo.png";
$plants_page="#";
$premiumContent_page="premiumContent.php";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='plants';
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
    <link rel="stylesheet" href="../CSS/plantswindowgeneral.css">
</head>

<body>
    <?php include __DIR__ . '/templates/header.php'; ?>
    <details open="">
        <summary><b>Category/Filter</b></summary>
        <table id="tableCategory">
            <tr>
                <th>
                    <h1>Category</h1>
                </th>
                <th>
                    <h1>Plant Filter</h1>
                </th>
            </tr>
            <tr>
                <td>
                    <form method="get">
                        <span>
                            <select name="category" class="input">
                                <option value="none">none</option>
                                <option value="balcony flowers">balcony flowers</option>
                                <option value="medicinal plants">medicinal plants</option>
                                <option value="pot plants">pot plants</option>
                                <option value="summer flowers">summer flowers</option>
                                <option value="wild plants">wild plants</option>
                                <option value="indoor plants">indoor plants</option>
                            </select>
                        </span>
                        <span class="buttonSpan">
                            <button type="submit" class="plantsButton">submit</button><button type="reset" class="plantsButton">reset</button>
                        </span>
                    </form>
                </td>
                <td>
                    <form method="get">
                        <label>type:
                            <select name="type" class="input">
                                <option value="none">none</option>
                                <option value="annuals">annuals</option>
                                <option value="bulbs">bulbs</option>
                                <option value="cactus - succulents">cactus - succulents</option>
                                <option value="climbers">climbers</option>
                                <option value="conifers">conifers</option>
                                <option value="ferns">ferns</option>
                                <option value="fruit">fruit</option>
                                <option value="vegetables">vegetables</option>
                                <option value="herbs">herbs</option>
                                <option value="ornamental grasses">ornamental grasses</option>
                                <option value="perennials">perennials</option>
                                <option value="roses">roses</option>
                                <option value="shrubs">shrubs</option>
                                <option value="trees">trees</option>
                                <option value="palms - cycads">palms - cycads</option>
                                <option value="bamboos">bambooos</option>
                                <option value="aquatic plants">aquatic plants</option>
                                <option value="orchids">orchids</option>
                            </select>
                        </label>
                        <label> color:
                            <select name="color" class="input">
                                <option value="none">none</option>
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
                        <span>
                            <label>height:
                                <input type="number" placeholder="height (cm)" name="height" step="1" class="input">
                            </label>
                            <label>age:
                                <input type="number" placeholder="age (weeks)" name="age" step="1" class="input">
                            </label>
                        </span>
                        <span class="buttonSpan">
                            <button type="submit" class="plantsButton">submit</button><button type="reset" class="plantsButton">reset</button>
                        </span>
                    </form>
                </td>
            </tr>
        </table>
    </details>
    <a href="createPlant.php">Create Plant</a>
    <?php
    //Verbindung zur Datenbank herstellen:
    $pdo = new PDO('mysql:host=localhost;dbname=OnlyPlants;charset=utf8', 'root', '');
    //Tabelle erstellen:
    $sql = "CREATE TABLE IF NOT EXISTS plants (
  id INT unsigned NOT NULL AUTO_INCREMENT,
  plantName VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  category VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  plantType VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  color VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  height INT NOT NULL,
  age INT NOT NULL,
  likes INT NOT NULL,
  clicks INT NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id), UNIQUE (plantName)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
    //SQL-Befehl ausführen:
    $pdo->query($sql);

    //Wegen Fehlermeldung if Prüfung:
    /*$sql = "SELECT namee FROM plants WHERE namee='inputname';";
if($pdo->query($sql)==null) {
//Pflanze einfügen:
$sql = "INSERT INTO plants (namee, category, typee, color, height, age, likes, clicks)
    VALUES('admin@admin.de','Geheim#2022','Max','Mustermann')";
//SQL-Befehl ausführen:
$pdo->query($sql);
}

//Datenabfrage:
$sql = "SELECT email, firstName, lastname FROM users";
foreach ($pdo->query($sql) as $row) {
   echo $row['firstName']." ".$row['lastname']."<br>";
   echo "E-Mail: ".$row['email']."<br><br>";
}*/
    //$color = $_GET["color"]??"Standardwert";
    //$height = $_GET["height"]??"Standardwert";
    //echo $color." ".$height;


    
$color = $_GET["color"]??"Standardwert";
$height = $_GET["height"]??"Standardwert";
echo $color." ".$height;
echo"<br>";
echo "STATUS: ".$_SESSION['sign-in-sign-out']."<br>";
echo "USER: ".$_SESSION['user']."<br>";
echo "USER ".$_SESSION['is_signed_in'];
echo session_id();
?>
</body>
</html>
