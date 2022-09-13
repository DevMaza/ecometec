<?php
if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if ($usuario == "admin" && $password == "123" || $usuario == "usuario" && $password == "1234" ) {
        if($usuario == "admin"){
            header("location:../php/admin/index.php");    
        }else{
            header("location:../php/usuario.php");
        }
        
    }else{
            ?>
            <?php
            include("../index.html");
          ?>
          <h2 class="menError">ERROR DE AUTENTIFICACION</h2>
         <?php
    }
}else{
          ?>
          <?php
             include("../index.html");
          ?>
             <h2 class="menError">CAMPOS VACIOS</h2>
         <?php
    }
?>