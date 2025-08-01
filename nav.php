<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            background-color: rgb(0, 140, 255);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* background-color: rgb(0, 140, 255); */
            padding: 10px;
            margin-left: 20px;
            margin-right: 20px;
            color: white;

        }

        a {
            text-decoration: none;
            margin-left: 10px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <div>
                <h2>Employee Management</h2>
            </div>
            <div>
                <a href="index.php">Add Employee</a>
                <a href="display.php">List Employee</a>
            </div>
        </nav>
    </div>
</body>

</html>