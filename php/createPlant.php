<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Plant</title>
    <link rel="icon" href="../favicon.png">
    <!--small auf general und small umbenennen und prüfen, of schriftart richtig ist, sonst richten-->
    <!--Mit online Validator drüber gehen-->
    <!--Bild sollte vom User erstellt werden - mal googln wie das gehen soll oder einfach mit URL arbeiten, indem der User die URL
    eintragen darf
    
    Namensgebung überarbeiten, überflüssigen code löschen und beautifiing mit shift, alt, f
    
    pushen-->
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowgeneral.css">
</head>

<body class="generalBackground">
    <button class="plantsButton"><a href="plants.php">back</a></button>
    <span class="createPlantSpan">
        <table class="tableCreatePlant">
            <tr>
                <th>
                    <h1 class="createPlant">Create</h1>
                </th>
                <th>
                    <h1 class="createPlant">Plant</h1>
                </th>
            </tr>
            <form method="get">
                <tr>
                    <td>
                        <label for="plantName">Plantname:</label>
                    </td>
                    <td>
                        <input id="plantName" type="text" placeholder="Plantname" name="plantName" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="category">Category:</label></td>
                    <td>
                        <select id="category" name="category" class="input" required>
                            <option value="balcony flowers">balcony flowers</option>
                            <option value="medicinal plants">medicinal plants</option>
                            <option value="pot plants">pot plants</option>
                            <option value="summer flowers">summer flowers</option>
                            <option value="wild plants">wild plants</option>
                            <option value="indoor plants">indoor plants</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="type">Type:</label></td>
                    <td>
                        <select id="type" name="type" class="input" required>
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
                    </td>
                </tr>
                <tr>
                    <td><label for="color">Color:</label></td>
                    <td>
                        <select id="color" name="color" class="input" required>
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
                    </td>
                </tr>
                <tr>
                    <td><label for="height">Height:</label></td>
                    <td>
                        <input id="height" type="number" placeholder="height (cm)" name="height" step="1" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="age">Age:</label></td>
                    <td>
                        <input id="age" type="number" placeholder="age (weeks)" name="age" step="1" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="imageUrl">Image-url:</label></td>
                    <td>
                        <input id="imageUrl" class="input" type="url" placeholder="url" name="url" pattern="https://.*" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="reset" class="createPlantsButton">reset</button>
                    </td>
                    <td>
                        <button type="submit" class="createPlantsButton">create</button>
                    </td>
                </tr>
            </form>
        </table>
    </span>
</body>

</html>