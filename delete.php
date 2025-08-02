<?php
include 'connect.php';
$id = $_GET['id'];
$query = "DELETE FROM employees WHERE id='$id'";
$result = mysqli_query($con, $query);

if(!$result){
    echo "Failed to Delete";
}
else{
    header("location: display.php");
}
?>