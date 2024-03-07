<?php
$server = "localhost";
$username = "root";
$password = "root";
$database = "shemakes";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
//     echo "Sucess";
// }
// else{
    die("Error".mysqli_error($conn));
}
?>