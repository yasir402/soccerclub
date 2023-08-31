<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'soccerclub';

$con = mysqli_connect($server,$username,$password,$database);
if($con){
    echo "";
}
else{
    echo "not connected";
}


?>