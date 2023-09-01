<?php

include __DIR__ . '/connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE FROM `crud` where id=$id";

    $result = mysqli_query($connection,$query);

    if($result){
        header('location: index.php');
    }else{
        die(mysqli_error($connection));
    }
}