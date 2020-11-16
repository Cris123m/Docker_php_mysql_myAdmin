<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php con docker</title>
</head>

<body>
    <?php
    echo "Hola mundo desde docker <br>";
    $conn = mysqli_connect("db", "root", "somewordpress", "prueba", "3306");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection succesfully";
    ?>
    <br>
    <?php
    $sql = "SELECT * FROM usuarios";
    $query = $conn->query($sql);
    while ($valores = mysqli_fetch_array($query)) {
        echo $valores['user'] . "<br>";
    }
    ?>
</body>

</html>