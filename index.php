<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';

?>

<br>
<div class="alert alert-primary" role="alert">
   <?php echo $mensaje;?>

    <a href="#" class="badge badge-sucess">ver carrito</a>  
</div>    
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
            <span><?php echo $producto['Nombre'];?></span>
            <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>
            <p class="card-text">descripcion</p>

<form action="" method="post">

<input type="text" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
<input type="text" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
<input type="text" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
<input type="text" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

<button class="btn btn-primary" 
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