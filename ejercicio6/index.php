<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['name'])){
            header("Location: http://localhost/Pruebas/ejercicio4/login.php");
        }else{
            echo $_SESSION['name'];
            ?>
                Usuario Loggeado
            <?php
        }
    ?>
</body>
</html>