<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrador</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <h1>Registrarte</h1>
        <input type="text" name="name" placeholder="Nombre Completo">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="registrarse"value="Registrarse">
        <a href="mostrardatos.php">Mostrar datos</a>
    </form>
    <?php
        include("registrar.php");
    ?>
</body>
</html>
