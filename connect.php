<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "employee";
$con = mysqli_connect($host, $user, $password, $db);
if(!$con)
{
    echo "submission failed";
}
?>