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
            <th scope="col">password</th>
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
            <td>'.$password.'</td>
            <td>'.$type.'</td>
             <td>
            <button class="btn btn-primary"><a href="updateUser.php? updateid='.$id.' " style="text-decoration: none" class="text-light" >Update</a></button>
            <button class="btn btn-danger"><a href="delUser.php? delid='.$id.' " class="text-light" style="text-decoration: none" >Delete</a></button>
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
</html>

