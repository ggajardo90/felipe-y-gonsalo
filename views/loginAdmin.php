<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css./styleA.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12 red">

            </div>
            <div class="col l4 m4 s12 center">
            <img width="250" src="../img/45.png" alt="">
                <h3 class="center">Baeuty Eyes</h3>
                <h6 class="center">Administracion de Usuarios</h6>

                <p class="red-text">
                    <?php
                    session_start();
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </p>
              

                <p class="green-text">
                    <?php

                    if (isset($_SESSION['respuesta'])) {
                        echo $_SESSION['respuesta'];
                        unset($_SESSION['respuesta']);
                    }
                    ?>
                </p>
              
             <form action="../controllers/LoginControllerAdmin.php" method="POST">
                    <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="rut" type="text" name="rut">
                    <label for="rut">Rut</label>
                    </div>
                   
                  
                    <div class="input-field">
                    <i class="material-icons prefix">https</i>
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Clave</label>
                    </div>
                  
                    
                    <button name="admin" value="administrador" class="btn blue lighten-2 black-text" Style="box-shadow: 3px 3px 12px hsl(240, 2%, 10%)" >Iniciar Sesion</button>

                    <p class="center black-text">
                        <a href="../index.php" class="black-text">Volver</a>
                    </p>

                  


                </form>

            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>