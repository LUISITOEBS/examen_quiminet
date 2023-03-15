<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Ejercicio 2</title>
</head>
    <body>
        <?php 
            require './ejercicio2.php';
            $obj = new GenerarArray(20);
            $array = $obj->getArray();

            function evaluarPar($number){
                if($number % 2 == 0){
                    return 'pares';
                }
                return '';
            }


            function evaluarPrimo($number){
                for ($i = 2; $i < $number; $i++) {
                    if (($number % $i) == 0) {
                        return '';
                    }
                }
                return 'primos';
            }
        ?>
        <section class="vh-100">
            <div class="container p-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col">
                        <table style="width: 100%;">
                            <thead class="cabecera">
                                <td>Columna 1</td>
                                <td>Columna 2</td>
                                <td>Columna 3</td>
                                <td>Columna 4</td>
                                <td>Columna 5</td>
                            </thead>
                            <tbody>
                                <?php
                                    $counter = 0;
                                    for ($i=0; $i < count( $array ); $i++) {
                                        if($counter == 5){
                                            ?>
                                                </tr>
                                                <tr>
                                            <?php
                                            $counter = 0;
                                        }
                                        $counter++;
                                        $par = evaluarPar($array[$i]);
                                        $primo = evaluarPrimo($array[$i]);
                                        ?>
                                                <td class="<?php echo $par; echo $primo; ?>">
                                                    <?php echo $array[$i]?>
                                                </td>
                                        <?php
                                    }
                                ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>