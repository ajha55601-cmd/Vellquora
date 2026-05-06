<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "vellquora"
);

if(!$conn){
    die("Database Connection Failed");
}

?>