<?php
include 'connect.php';
$query = "SELECT * FROM employees";
$run = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee list</title>
    <style>
        h1{
            text-align: center;
            margin: 5px 0;
            color: green;
        }
        table{
            border-collapse: collapse;
            margin: auto;
        }
        td,th{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <h1>Employee list</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Designation</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php if(mysqli_num_rows($run) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($run)): ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['designation'] ?></td>
                        <td><?= $row['salary'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">no data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>