<?php 
include 'connect.php';
$id = $_GET['id'];

$query = "SELECT * FROM employees WHERE id='$id'";
$result = mysqli_query($con, $query);

$row= mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <!-- <h1>Employee Management</h1> -->
    <form class="form" action="set.php" method="post" id="data" onsubmit="return validation()">
        <input type="hidden" id="id" name="id" value="<?= $id?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $row['name'] ?>" required><br><br>
        <span id="nameError"></span>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="<?= $row['mobile'] ?>"><br><br>
        Gender:
        <input type="radio" id="male" name="gender" value="male" <?= ($row['gender'] == 'male')?'checked':'' ?>>
        <label for="male">male</label>
        <input type="radio" id="female" name="gender" value="female" <?= ($row['gender'] == 'female')?'checked':'' ?>>
        <label for="female">female</label> <br> <br>
        <label for="name">Designation:</label>
        <input type="text" id="designation" name="designation" value="<?= $row['designation'] ?>" required><br><br>
        <label for="name">Salary:</label>
        <input type="text" id="salary" name="salary" value="<?= $row['salary'] ?>" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <script src="script.js"></script>
</body>
</html>
