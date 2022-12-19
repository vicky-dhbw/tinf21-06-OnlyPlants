<?php

$connection=new mysqli('localhost','root','','OnlyPlants');

if(!$connection){
    die(mysqli_error($connection));
}
