<?php 
class BaseDatos /*extends mysqli*/{
    private $sql;
    public function __construct(){
        $sql=new mysqli("localhost","israel","israel","mercado");
        //parent::__construct('localhost:3306','israel','israel','mercado');
    }
    public function guardarUsuario($usuario){
        echo '<h1> Se llegó al método guardarUusario</h1>';
        $consulta= "INSERT INTO usuarioM (nombre,idioma,region,productos,nombre_mercado,idMercado) VALUES('".$usuario->getNombre()."','".$usuario->getIdioma()."','".$usuario->getRegion()."','".$usuario->getProducto()."','".$usuario->getMercado()."','".$usuario->getIdMercado()."')";
        $this->sql->query($consulta);
        //parent::query($consulta);
        //$consulta = "INSERT INTO usuarioM (nombre,idioma,region,productos,nombre_mercado,idMercado) VALUES('"."José Reyes"."','"."Español y mazateco"."','"."Cañada"."','"."Caseta telefónica"."','"."La Toma Mazatlan"."','"."1"."')";
        /*$sql->query($consulta);
        if($sql){
            echo"Correcto";
        }else{
            echo "Incorrecto";
        }*/
        //mysql_close($sql);
    }

    public function consultarUsuario($id){
        $consulta = "SELECT * FROM usuarioM WHERE id=$id";
        //$consulta->query($consulta);

    }

    public function saludo($usuario){
        echo "Hola".$usuario->getNombre();
        echo "Hola".$usuario->getIdioma();
        echo "Hola".$usuario->getRegion();
        echo "Hola".$usuario->getProducto();
        echo "Hola".$usuario->getMercado();
        echo "Id Mercado".$usuario->getIdMercado();
    }
}

?>