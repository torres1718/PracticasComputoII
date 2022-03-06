<?php
INCLUDE "../nav.php";
//variables
//evaluar la accion de hacer clic en el boton de cambiar
if(isset($_POST["enviar"])){
    //echo "<script>alert('Clic')</script>";
    $idioma="$_POST[idioma]";
    echo $idioma;
    INCLUDE $idioma. ".php";

}else{
    INCLUDE "es.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Programacion Computacional IV</h1>
    <H2><?php echo TITLE; ?></H2>
    <h2><?php echo HEADING_TITLE; ?></h2>
    <h2><?php echo OVERVIEW_TITLE; ?></h2>

    <form action="" method="POST">
    <select name="idioma" id="">
        <option value="es">Spanish</option>
        <option value="en">English</option>
    </select>
    <input type="submit" name="enviar"value="Cambiar"/>
    </form>
</body>
</html>