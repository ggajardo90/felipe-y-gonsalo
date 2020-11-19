<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col l4 m4 s12 red">

            </div>
            <div class="col l4 m4 s12 center">
                <img width="80" src="https://www.lupusresearch.org/wp-content/uploads/2017/09/resource-links-icon.png" alt="">
                <h3 class="center">Opticas Miope spa</h3>
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



                <form action="controllers/RegistroController.php" method="POST">
                    <div class="input-field">
                        <input id="rut" type="text" name="rut">
                        <label for="rut">Rut</label>
                    </div>
                    <div class="input-field">
                        <input id="nombre" type="text" name="nombre">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field">
                        <input id="rol" type="text" name="rol">
                        <label for="rol">Rol [Ingreseadministrador o vendedor]</label>
                    </div>
                    <div class="input-field">
                        <input id="clave" type="password" name="clave">
                        <label for="clave">Clave</label>
                    </div>
                    <div class="input-field">
                        <input id="estado" type="number" name="estado">
                        <label for="Estado">Estado</label>
                    </div>

                    <button class="btn black ancho-100">Registrar Usuario</button>

                    <p class="center">
                        <a href="index.php">Volver</a>
                    </p>


                </form>

            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>