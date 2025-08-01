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
    <form class="form" action="code.php" method="post" id="data" onsubmit="return validation()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <span id="nameError"></span>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile"><br><br>
        Gender:
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">female</label> <br> <br>
        <label for="name">Designation:</label>
        <input type="text" id="designation" name="designation" required><br><br>
        <label for="name">Salary:</label>
        <input type="text" id="salary" name="salary" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <script src="script.js"></script>
</body>
</html>
