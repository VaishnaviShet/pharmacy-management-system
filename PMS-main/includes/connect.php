<?php
$conn = mysqli_connect("localhost","root","","pharmacy");
if(!$conn){
    die("Connection Error" . mysqli_connect_error());
}
?>