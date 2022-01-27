<?php
include 'config.php';

if(isset($_GET['deleteid'])){
    $Id = $_GET['deleteid'];

    $sql = "DELETE FROM `record` where Id=$Id";
    $result = mysqli_query($conn, $sql);

    if($result){
        //echo "Deleted Succefully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}


?>