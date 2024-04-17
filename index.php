<?php
include 'global/config.php';
include 'global/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">Logo</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Car(0)</a>
            </li>
        </ul>
    </div>
 </nav>
<br/>
<br/>
<div class="container">
<br>
<div class="alert alert-primary" role="alert">
    Pantalla de mensaje...
    <a href="#" class="badge badge-sucess">ver carrito</a>  
</div>    
<div class="row">
    <?php
        $sentencia=$pdo->prepare("SELECT * FROM 'tblproductos'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        print_r($listaProductos);
    ?>
    <?php foreach($listaProductos as $producto){ ?>

    <?php } ?>     

    <div class="col-3">
    <div class="card">
        <img 
        title="God oF War"
        class="card-img-top" src="https://image.api.playstation.com/vulcan/ap/rnd/202207/1210/4xJ8XB3bi888QTLZYdl7Oi0s.png" alt="Juego">
        <div class="card-body">
            <span>God of War Game for PS4</span>
            <h5 class="card-title">$70</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="GTA V"
        class="card-img-top" src="https://cdn.bynogame.com/games/gta5-1662829149472.webp" alt="Juego">
        <div class="card-body">
            <span>GTA V for PS5</span>
            <h5 class="card-title">$60</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Call Of Duty Warzone"
        class="card-img-top" src="https://i.blogs.es/84e1f8/ftiepigx0ayfmt4/450_1000.webp" alt="Juego">
        <div class="card-body">
            <span>Call Of Duty Warzone for Pc</span>
            <h5 class="card-title">$95</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Mortal Kombat 11 "
        class="card-img-top" src="https://i5.walmartimages.com.mx/mg/gm/1p/images/product-images/img_large/00088392966954l.jpg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="Juego">
        <div class="card-body">
            <span>Mortal Kombat 11 for XBOX ONE</span>
            <h5 class="card-title">$75</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="FIFA 23"
        class="card-img-top" src="https://www.shoppingchina.com.py/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBNXJ5QXc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--ccad0c1455bab5e11cd44be3adc894f9d1aea96f/836198.jpg" alt="Juego">
        <div class="card-body">
            <span>FIFA 23 for PS4</span>
            <h5 class="card-title">$80</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Spider-Man"
        class="card-img-top" src="https://image.api.playstation.com/vulcan/ap/rnd/202009/3021/B2aUYFC0qUAkNnjbTHRyhrg3.png" alt="Juego">
        <div class="card-body">
            <span>Spider-Man for PS4</span>
            <h5 class="card-title">$95</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Dragon Ball Kakarot"
        class="card-img-top" src="https://image.api.playstation.com/vulcan/ap/rnd/202302/2107/4f15fe511e0062262a894493e6dcdbee2f615abb4024b384.png" alt="Juego">
        <div class="card-body">
            <span>Dragon Ball Z Kakarot for PS4</span>
            <h5 class="card-title">$100</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="MLB The Show 23"
        class="card-img-top" src="https://sm.ign.com/ign_latam/cover/m/mlb-the-sh/mlb-the-show-23_vyhz.jpg" alt="Juego">
        <div class="card-body">
            <span>MLB The Show 23 for PS4</span>
            <h5 class="card-title">$90</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Resident Evil 4 Remake"
        class="card-img-top" src="https://gamer4ever.com.co/cdn/shop/products/013388937134_001.jpg?v=1679414664" alt="Juego">
        <div class="card-body">
            <span>Resident Evil 4 Remake for PS4</span>
            <h5 class="card-title">$40</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Spider Man Miles Morales"
        class="card-img-top" src="https://image.api.playstation.com/vulcan/ap/rnd/202008/1020/T45iRN1bhiWcJUzST6UFGBvO.png" alt="Juego">
        <div class="card-body">
            <span>Spider Man Miles Morales for PS4</span>
            <h5 class="card-title">$60</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Farcry 4"
        class="card-img-top" src="https://image.api.playstation.com/vulcan/img/cfn/113076px2b27B2ofcw5IzONcQEr6vlx2oSWvfJEutr9o7jAcP9vbVFjtbYjYoX2MOkkuepqwRRkk8Krf08MR2BKeTPw-FyY7.png" alt="Juego">
        <div class="card-body">
            <span>Farcry 4 for PS4</span>
            <h5 class="card-title">$60</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>
    <div class="col-3">
    <div class="card">
        <img 
        title="Drago Ball Xenoverse 2"
        class="card-img-top" src="https://image.api.playstation.com/cdn/UP0700/CUSA05350_00/9EuQOvMm46H85n6DApEYTsaKob8jd1VK.png" alt="Juego">
        <div class="card-body">
            <span>Dragon Ball Xenoverse 2 for PS4</span>
            <h5 class="card-title">$45</h5>
            <p class="card-text">descripcion</p>
            <button class="btn btn-primary" 
            type="submit" 
            name="btnAccion" 
            value="Agregar" >Add to cart</button>
        </div>
    </div>
    </div>

</div>
</div>

</body>
</html>