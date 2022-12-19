<?php echo $_GET['delid'];
include "connection.php";

if(isset($_GET['delid'])){
    $id=$_GET['delid'];

    $sql="delete from users where id=$id";
    $result=mysqli_query($connection,$sql);

    if($result){
        header("Location: adminPage.php");
    }
    else{
        die(mysqli_error($connection));
    }
}



