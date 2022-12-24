<?php
include "connection.php";

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/buttonStyle.css">
</head>
<body>

<div class="container my-4">
    <button class="btn btn-dark my-3"><a style="text-decoration: none" href="createUser.php" class="text-light">Create user</a></button>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">type</th>
            <th scope="col">Operations</th>

        </tr>
        </thead>
        <tbody>

        <?php

        $sql="select * from users";
        $result=mysqli_query($connection,$sql);
        if($result){
            while ($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $password=$row['password'];
                $type=$row['type'];

                echo ' <tr>
            <th scope="row"> '.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$type.'</td>
             <td>
             <a class="rounded-button2" href="updateUser.php? updateid='.$id.' ">
                 <ion-icon size="large" name="create-outline"></ion-icon>
             </a>
               <a class="rounded-button" href="delUser.php? delid='.$id.' ">
                 <ion-icon size="large" name="trash-outline"></ion-icon>
             </a>
    
            </td>
        </tr>
        ';
            }
        }
        ?>

        </tbody>
    </table>
</div>



</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>

