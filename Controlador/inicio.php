<?php
    include_once("../Modelo/Usuario.php");
    include_once("../Modelo/BaseDatos.php");

    $usuario =new Usuario($_POST["nombre"],$_POST["idioma"],$_POST["region"],$_POST["productos"],$_POST["mercado"],$_POST["idMercado"]);    
    echo $usuario->getNombre();
    echo $usuario->getIdioma();
    echo $usuario->getRegion();
    echo $usuario->getProducto();
    echo $usuario->getMercado();
    echo $usuario->getIdMercado();
    echo "<br>";
    $baseDatos = new BaseDatos();
    
    $baseDatos->saludo($usuario);
    $baseDatos->guardarUsuario($usuario);
    
    /*$datosPersona->setNombre("Israel Reyes");
    //echo "EL dato del objeto nombre es: ".$datosPersona;
    //echo "Tu nombre es ".$datosPersona->getNombre();
    echo "<br>";
    echo "EL idioma que hablas es ".$_POST['idioma'];
    echo "<br>";
    echo "Tu región es ".$_POST['region'];
    echo "<br>";
    echo "Tus productos son ".$_POST['productos'];
    echo "<br>";
    echo "EL mercado donde comercias es ".$_POST['mercado'];*/
      
?>