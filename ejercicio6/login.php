<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>REGISTRO</title>
</head>
<body>
    <section class="vh-100">
        <div class="container p-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6 d-flex p-4 h-100 align-self-center">
                    <img src="./img/seguridad.webp" alt="Imagen Registro" class="img-fluid align-self-center">
                </div>
                <div class="col-6 p-4 align-self-center">
                    <form>
                        <h1>Crea tu cuenta</h1>
                        <hr>
                        <br>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                class="form-control"
                                placeholder="Ej. correo@correo.com"
                            >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name">Contraseña</label>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                class="form-control"
                                placeholder="Escriba una contraseña"
                            >
                        </div>
                        <br>
                        <div class="d-grid gap-2">
                            <button type="button" onclick="iniciarSesion()" class="btn btn-primary">
                                Crear Cuenta
                            </button>
                        </div>
                        
                        <br>
                        <span>No tienes cuenta? <a href="./registro.php">Crear una cuenta</a></span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>

        function validarCampos( email, password ){
            let errors =[];
            if(email.length === 0 ){
                errors.push('Email obligatorio');
            }
            if(password.length === 0 ){
                errors.push(' Se necesita una contraseña');
            }
            if(errors.length !== 0){
                alert('Usted tiene los siguientes errores: ' + errors);
                return false;
            }
            return true;
        }


        function iniciarSesion(){
            var email = $("#email").val();
            var password = $("#password").val();
            if( validarCampos(email, password)){
                $.ajax({
                    url: 'http://localhost/Pruebas/ejercicio4/server/auth.php?operacion=login',
                    type: 'POST',
                    data: {email, password},
                    success: function(respuesta) {
                        if(respuesta == true){
                            window.location.href = "http://localhost/Pruebas/ejercicio4/index.php";
                        }else{
                            alert(respuesta);
                        }
                    },
                    error: function() {
                        console.error("No es posible completar la operación");
                    }
                });
            }
            
        }

        
    </script>
</body>
</html>