<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("db_SERVER", "localhost");
define("db_USEREM","CustEmail");
define("db_PASSWORD","");
define("db_NAME","Retail");
$con= mysqli_connect(db_SERVER , db_USER, db_PASSWORD, db_NAME);
if(!$con){
    die("7 failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM retail ";
$result = mysqli_query($con,$sql);
if($result){
    echo "Successfully Connected"
}
else{
    echo "Failed " . mysqli_error();
}