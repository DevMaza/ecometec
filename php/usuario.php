
<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/usuario.css">
    <title>Usuario</title>
</head>
<body>

<?php 

$carrito_mio=$_SESSION['carrito'];
$_SESSION['carrito']=$carrito_mio;


// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad']; 
    $total_cantidad ++;
    $totalcantidad += $total_cantidad;
    }}}
?>

        <header>
            <h1>!Bienvenidos a EcomTec!</h1>
            <section>Ecuentra tus productos aki!</section>
        </header>

    <nav>
        <ul>
            <li>
                <a href="empresa.php">Inicio</a>
            </li>
            <li>
                <a href="empresa.php">Contactanos</a>
            </li>
            <li>
                <a href="empresa.html">Productos</a>
            </li>
        </ul>
    </nav>
    <div class="clearfix"></div>
    <fieldset>
        <legend>Haga su pedido aqui</legend>
            <form>
                <input type="type" name="cantidad" placeholder="Ingrese la cantidad de polos que desea: ">
                <input type="submit" value="siguiente">
            </form>
    </fieldset>
    <div class="contenedor">
        <div class="contenedor-playeras">
            <div class="contenedor-total">
                <div class="card" style="background-image: url('../img/playera10.png')">   
                </div>
               <div class="texto" >
                    <form action="../carrito/cart.php" method="POST">
                         <h3>Playera poliester </h3>
                         <p>100% hecho en mexico</p>
                         <p>Precio $1000</p>
                         <input name="titulo" type="hidden" id="titulo" value=" PLAYERA AZUL" />
                         <input name="precio" id="precio" type="hidden" value="1000" />
                         <input type="text" name="cantidad" id="cantidad" placeholder="cantidad"><br><br>
                         <input class="btn btn-success" type="submit" value="Agregar">
                
                     </form>
                </div> 

            </div>

            <div class="contenedor-total">
                <div class="card" style="background-image: url('../img/playera3.webp')">   
                </div>
               <div class="texto" >
                    <form action="../carrito/cart.php" method="POST">
                        <h3>Sudadera Algodon</h3>
                        <p>100% hecho en mexico</p>
                        <p>Precio $2000</p>
                        <input name="titulo" type="hidden" id="titulo" value="SUDADERA ROSA" />
                        <input name="precio" id="precio" type="hidden" value="2000" />
                        <input type="text" name="cantidad" id="cantidad" placeholder="cantidad"><br><br>
                        <input class="btn btn-success" type="submit" value="Agregar">
                     </form>
                </div> 

            </div>

           <div class="contenedor-total">
                <div class="card" style="background-image: url('../img/taza.webp')"></div>
               <div class="texto" >
                    <form action="../carrito/cart.php" method="POST">
                        <h3>Taza Papa Tec</h3>
                        <p>100% hecho en mexico</p>
                        <p>Precio $500</p>
                        <input name="titulo" type="hidden" id="titulo" value="Taza Blanca PaPa Tec" />
                        <input name="precio" id="precio" type="hidden" value="2000" />
                        <input type="text" name="cantidad" id="cantidad" placeholder="cantidad"><br><br>
                        <input class="btn btn-success" type="submit" value="Agregar">
                     </form>
                </div> 

            </div>


        </div>
    </div>

<!-- ****************** verificar -->

       
            <div >
                <div>
                    <div >
                        <ul >
                            <?php
                            if(isset($_SESSION['carrito'])){
                            $total=0;
                            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                            if($carrito_mio[$i]!=NULL){
                        
            ?>  <hr />
                            <li>
                                <div>
                                    <div><h6>Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
                                    </div>
                                    <div>
                                    <span>COSTO P/U <?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php
                            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                            }
                            }
                            }
                            ?>
                            <br />
                            <li>
                            <span>Total $</span>
                            <strong><?php
                            if(isset($_SESSION['carrito'])){
                            $total=0;
                            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                            if($carrito_mio[$i]!=NULL){ 
                            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                            }}}
                            echo $total; ?> MEX</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

    <a type="button" href="../carrito/borrarcarro.php"><strong><h2>PAGAR</h2></strong></a>
<!-- ****************** verificar -->

</body>
</html>

