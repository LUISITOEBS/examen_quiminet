<?php
    //Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023
    $opcion = $_GET['operacion'];
    require './conection.php';
    $con = conectar();
    switch ($opcion) {
        case 'registro':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $token = md5($email . $password);
            $passwordSegura = crypt($_POST['password'], '$5$rounds=5000$SamaI1uzS4lD4n4Ac0STA0321$');
            $query = "SELECT * FROM users WHERE `email` = '$email'";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0){
                echo false;
            }else{
                $query2 = "INSERT INTO `users` (`name`, `token`, `email`, `password`) VALUES ('$name', '$token', '$email', '$passwordSegura')";
                $result2 = mysqli_query($con, $query2);
                session_start();
                $_SESSION['name'] = $name;
                echo true;
            }
        break;

        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordD = crypt($_POST['password'], '$5$rounds=5000$SamaI1uzS4lD4n4Ac0STA0321$');
            $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$passwordD'";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0){
                $user = mysqli_fetch_array($result);
                session_start();
                $_SESSION['name'] = $user['name'];
                echo true;
            }else{
                echo false;
            }
        break;
        
        default:
            echo 'server error';
        break;
    }