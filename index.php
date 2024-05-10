<?php
include 'global/config.php';
include 'carrito.php';
include 'global/conexion.php';
include 'templates/cabecera.php';

?>



<br>
<?php if($mensaje!=""){?>
<div class="alert alert-success" role="alert">
   <?php echo ($mensaje);?>
   

    <a href="mostrarCarrito.php" class="btn btn-success">muy carrito</a>  
</div>

<?php }?>

<div class="row">
    <?php
        $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
       // print_r($listaProductos);
    ?>
    <?php foreach($listaProductos as $producto){ ?>

        <div class="col-3">
    <div class="card">
        <img  data-bs-toggle="popover" 
          data-bs-title="<?php echo $producto['Nombre'];?>"
          data-bs-trigger="hover" 
          data-bs-content="<?php echo $producto['Descripcion'];?>"
          height="317px"

        title="<?php echo $producto['Nombre'];?>"
        class="card-img-top" src="<?php echo $producto['Imagen'];?>" alt="<?php echo $producto['Nombre'];?>">
        <div class="card-body">
            <span style="color:lightcyan"><?php echo $producto['Nombre'];?></span>
            <h5 style="color:lightcyan" class="card-title">$<?php echo $producto['Precio'];?></h5>
            <p style="color:lightcyan" class="card-text">description</p>

<form action="" method="post">

<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

<button id="negro" class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>

</form>

           
        </div>
    </div>
    </div>

    <?php } ?>     

</div>
</div>

<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover 
    (popoverTriggerEl))
</script>    

<?php
include 'templates/pie.php';

?>
