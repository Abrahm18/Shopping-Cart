<?php
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){

   switch($_POST['btnbAccion']){

          case 'Agregar':

               if( is_numeric(  openssl_decrypt($_POST['id'],COD,KEY))){
                  $ID=openssl_decrypt($_POST['id'],COD,KEY);
                  $mensaje="Ok ID correcto".$ID."<br/>";
            

               }else{
                   $mensaje.="Upss... ID incorrecto".$ID."<br/>";
               }

               if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje="Ok precio".$NOMBRE."<br/>";
               }else{  $mensaje.="Upss... algo pasa con el nombre"."<br/>";  break;}


               if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje="Ok precio".$CANTIDAD."<br/>";
               }else{   $mensaje.="Upss.. algo pasa con la cantidad"."<br/>";  break;}


               if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje="Ok precio".$PRECIO."<br/>";
               }else{   $mendsaje.="Upss.. pasa algo con el precio"."<br/>";  break;}

if(!isset($_SESSION['CARRITO'])){

$producto=array(
 'ID'=>$ID,
 'NOMBRE'=>$NOMBRE,
 'CANTIDAD'=>$CANTIDAD,
 'PRECIO'=>$PRECIO
);
$_SESSION['CARRITO'][0]=$producto;


}else{
    $NumeroProductos=count($_SESSION['CARRITO']);

    $producto=array(
        'ID'=>$ID,
        'NOMBRE'=>$NOMBRE,
        'CANTIDAD'=>$CANTIDAD,
        'PRECIO'=>$PRECIO
       );
       $_SESSION['CARRITO'][$NumeroProductos]=$producto;
}
$mensaje= print_r($_SESSION,true);


break;

   }

}

?>