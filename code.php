<?php
include "connect.php";
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];

$query = "INSERT INTO employees(name, email, mobile, gender, designation, salary) VALUES('$name', '$email', '$mobile', '$gender', '$designation', '$salary') ";

$run = mysqli_query($con, $query);

if(!$run)
{
    echo "Failed to insert";
}
else{
    header("location: display.php");
}
?>