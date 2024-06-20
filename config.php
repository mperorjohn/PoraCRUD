<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='pora_crud';

//connecting to the database
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

//checking the connection
if($con){
   // header('location:success.php');
}else{
    die(mysqli_error($con));
}
?>