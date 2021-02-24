<?php
$connection = mysqli_connect('localhost','root','','inceptorDB');

if(!$connection){
    die("Database Server connection Error" . mysqli_connect_error());
}

$sql = "create table enquiries(
    enquiry_id varchar (255) not null,
    primary key (enquiry_id),
    enquiry_date date (255) not null,
    surname varchar (255) not null,
    mid_name varchar (255) not null,
    last_name varchar (255) not null,
    tel_number varchar (255) not null,
    course varchar (255) not null,
    comments varchar (255) not null
)";

if($connection->query($sql)==true){
    print "Table Enquiries Created Successfully";
}
else {
    print "Error Creating Table Enquiries or Table Enquiries";
}
mysqli_close($connection);