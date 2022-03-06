<?php
//variables
//evaluar la accion de hacer clic en el boton de cambiar
if(isset($_POST["enviar"])){
    //echo "<script>alert('Clic')</script>";
    $idioma="$_POST[idioma]";
    //echo $idioma;
    INCLUDE "pages/" . $idioma. ".php";

}else{
    INCLUDE "pages/es.php";
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><?php echo NAME_SITE; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><?php echo HOME; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pagina.php"><?php echo PAGE; ?></a>
        </li>
      </ul>
      <span class="navbar-text">


      <form action="" method="POST">
    <select name="idioma" id="">
        <option value="es">Spanish</option>
        <option value="en">English</option>
    </select>
    <input type="submit" name="enviar"value="Cambiar"/>
    </form>


      </span>
    </div>
  </div>
</nav>
