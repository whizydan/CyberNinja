<?php
$conn = mysqli_connect("localhost","root","","cyberninja");
if(!$conn){
    die("Error connecting to database ". mysqli_connect_error());
}