<!DOCTYPE html>
<html>
<head>
    <title>Movie Rental Website</title>
</head>
<body>
    <?php
        $cnx = new mysqli('localhost', 'someuser', 'dbpass', 'sakila');
            if ($cnx->connect_error)
                die("Connection Failed: " . $cnx->connect_error);
            else
                echo "Hello, World!";
    ?>
</body>
</html>