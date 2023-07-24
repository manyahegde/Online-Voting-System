<?php
$connect = mysqli_connect("localhost", "root", "","voting") or die("connection failed!");

#to check if the database is connected
if($connect){
    echo "Connected!";
}
else{
    echo "Not Connected!";
}
?>
