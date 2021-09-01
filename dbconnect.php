<?php
$database=localhost;
$username=user;
$password=root;
$db_name=user;
$connect=mysqli_connect($database,$username,$password,$db_name);
if(!$connect){
    die("not able to connect ",mysqli_error($conn));
}
else(){
    echo"successfully connected";
}