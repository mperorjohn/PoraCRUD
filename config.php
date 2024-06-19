<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='poracrud';

//connecting to the database
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

//checking the connection
if($con){
    //echo "Connection successful";
}else{
    die(mysqli_error($con));
}
?>