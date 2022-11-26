<link rel="stylesheet" href="../../css/headerstyle.css">
<nav class="navs">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fa fa-bars"></i>
    </label>
    <label class="logo">Auto-care!</label>
    <ul>
        <li><a class="<?php $currentPage =" ";
            echo $currentPage == 'index' ? 'active' : '' ?>" href="../../index.php">Startseite</a></li>
        <li><a class="<?php echo $currentPage == 'leistungen' ? 'active' : '' ?>" href="../pages/leistungen.php">Leistungen</a></li>
        <li><a class="<?php echo $currentPage == 'autos' ? 'active' : '' ?>" href="../pages/autos.php">Autos</a></li>
        <li><a class="<?php echo $currentPage == 'kontakt' ? 'active' : '' ?>" href="../pages/kontakt.php">Kontakt</a></li>
    </ul>
</nav>