<?php

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/mios.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body id="body">
        <?php
            include "cabecera.php";
        ?>
        <div class="centro">
            <div class="row centrar">
                <div class="col-md-12 fondBlanco" id="divLogin">
                    <label id="lblTituLogin">INICIAR SESION</label>
                    <form>
                        <div class="margin-bottom-10 flex-end">
                            <label class="lblFormulario">CORREO ELECTRONICO:</label>
                            <input type="email"/>
                        </div>
                        <div class="margin-bottom-40 flex-end">
                            <label class="lblFormulario">CONTRASEÑA:</label>
                            <input type="password"/>
                        </div>
                        <input class="btn-primary" type="button" value="INICIAR SESION">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>