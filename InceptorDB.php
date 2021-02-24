<?php
$connection = mysqli_connect('localhost','root','');

if(!$connection){
    die("Database Server connection Error" . mysqli_connect_error());
}

$sql = "create database inceptorDB";

if($connection->query($sql)==true){
    print "Database Created Successfully";
}
else {
    print "Error Creating Database or Database exists";
}
mysqli_close($connection);