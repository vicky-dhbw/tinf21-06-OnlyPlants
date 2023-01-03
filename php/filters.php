<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../CSS/plantswindowbig.css">
    <link rel="stylesheet" href="../CSS/plantswindowmiddle.css">
    <link rel="stylesheet" href="../CSS/plantswindowsmall.css">

</head>
<style>
    .filter-div{
        background-color:#C0DDB3;
        padding-top: 20px;
        padding-bottom: 10px;
        color: black;
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

</style>
<body>

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
                            <form method="get" class="f1" action="premiumContent.php">
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
                <form method="get" action="premiumContent.php">
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


</body>
</html>
