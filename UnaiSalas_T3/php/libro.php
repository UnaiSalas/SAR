<html>

<head>
    <meta charset="UTF-8">

    <?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $sugerencia = "
        Nombre : $nombre
        Correo : $correo
        Mensaje : $mensaje
        ";



    ini_set('track_errors', 1);
    $archivo = fopen("../datos/$nombre.txt", "w");
    fwrite($archivo, $sugerencia);
    if (!$archivo) {
        echo 'fopen failed. reason: ', $php_errormsg;
    }

    /*$message = "Enviado";
    echo "<script type='text/javascript'>alert('$message');</script>";

    printf("<script type='text/javascript'>alert('Lo estamos redireccionando'); </script>");*/

    header( "Location: ../index.html");
    ?>
</head>

<body>
</body>

</html>