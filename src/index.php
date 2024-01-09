<?php 
    $host = 'localhost:3306';
    $user = 'root';
    $pass = 'passapol';
    $db = 'mydb';

    $conn = mysqli_connect($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected to MySQL server successfully!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello wold <?php echo $name ?></h1>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
</body>
</html>