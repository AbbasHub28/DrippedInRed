<?php
define("db_SERVER", "localhost");
define("db_USEREM","CustEmail");
define("db_PASSWORD","");
define("db_NAME","Retail");
$con= mysqli_connect(db_SERVER , db_USER, db_PASSWORD, db_NAME);
if(!$con){
    die("7 failed: " . mysqli_connect_error());
}
$PASSWORD=$_POST['PASSWORD'];
$CustEmail=$_POST['CustEmail'];
$sql= "INSERT INTO retail (CustEmail,PASSWORD) VALUES ('$CustEmail','$PASSWORD')";
if(mysqli_query($con,$sql)){
echo "Succesfully logged in";}
else{
    echo "Error: " . mysqli_error($con);
}
mysql_close($con);
?>


