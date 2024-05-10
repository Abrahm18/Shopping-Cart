<?php session_start(); ?>

<?php
$mensaje="";

if(isset($_POST["btnAccion"])){
  switch($_POST["btnAccion"]){
    case 'Agregar':

      if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
        $ID=openssl_decrypt($_POST['id'],COD,KEY);
        $mensaje.="ok ID correct".$ID."<br/>";
      }else{
        $mensaje.="Ups... ID Incorrect".$ID."<br/>"; break;
      }
      if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
          $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
          $mensaje.="Ok NOMBRE".$NOMBRE."<br/>";
        }else{ $mensaje.="Upps... ID Incorrecto".$ID."<br/>";  break;}

        if(is_string(openssl_decrypt($_POST['cantidad'],COD,KEY))){
          $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
          $mensaje.="Ok CANTIDAD".$CANTIDAD."<br/>";
        }else{ $mensaje.="Upps... something happens with the quantily".$ID."<br/>";  break;}

        if(is_string(openssl_decrypt($_POST['precio'],COD,KEY))){
          $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
          $mensaje.="Ok precio".$PRECIO."<br/>";
        }else{ $mensaje.="Upps... something happens with the price".$ID."<br/>";  break;}

        if(!isset($_SESSION['CARRITO'])){
          $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO
          );
          $_SESSION['CARRITO'][0]=$producto;
          $mensaje= "Product added to cart";
        }else{

          $idProductos=array_column($_SESSION['CARRITO'],"ID");
          if(in_array($ID,$idProductos)) {
            echo "<script>alert('The product has already been selected..');</script>";
            $mensaje= "";
          }else {

          $NumeroProductos=count($_SESSION['CARRITO']);
          $producto=array(
            'ID'=>$ID,
            'NOMBRE'=>$NOMBRE,
            'CANTIDAD'=>$CANTIDAD,
            'PRECIO'=>$PRECIO
          );
          $_SESSION['CARRITO'][$NumeroProductos]=$producto;
          $mensaje= "Product added to cart";
          }
        }
        // $mensaje=print_r($_SESSION, true)

      break;
      case "Eliminar";
      if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
          $ID=openssl_decrypt($_POST['id'],COD,KEY);

        foreach($_SESSION['CARRITO'] as $indice=>$producto) {
          if($producto['ID']==$ID) {
            unset($_SESSION['CARRITO'][$indice]);
            echo "<script>alert('Element eraset...');</script>";
          }


        }
      }else{
          $mensaje.="Ups... ID Incorrect".$ID."<br/>"; break;
      } 
      break;
  }
}

?>