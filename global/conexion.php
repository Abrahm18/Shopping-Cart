<?php 
$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
$connect= mysqli_connect("localhost", "root", "", "shopping-cart");
try{

    $pdo= new PDO($servidor,USUARIO,PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND>"SET NAMES utf8")
            );
        echo "<script>alert('connecting...')</script>";

}catch(PDOException $e){

    echo "<script>alert('Error...')</script>";
}

?>