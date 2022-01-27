<?php

$conn = new mysqli('localhost', 'root', '', 'db_emp');

//if the sql not connected the error will be shown

if(!$conn){
    die(mysqli_error($con));
}

?>