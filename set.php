<?php
include 'connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];

$query = "UPDATE employees SET name='$name',  email='$email', mobile='$mobile', gender='$gender', designation='$designation', salary='$salary' WHERE id='$id'";

$run = mysqli_query($con, $query);

if(!$run){
    echo "failed to update";
}
else{
    header('location: display.php');
}

?>