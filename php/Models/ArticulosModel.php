<?php
require_once('Model.php');

class ArticulosModel extends Model{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio_unitario;
    private $unidades;
    private $urlImage;
    private $idmarca;
    private $idtipo_producto;

    public function createWithImage( $data = array(), $urlImage){
        ;
         foreach($data as $key => $value){
             //Variables variables (variable dinamica)
             $$key = $value;
         }
         $this->query = "INSERT INTO producto ( nombre, descripcion, precio, unidades, dir_foto, idmarca, idtipo_producto) 
                         VALUES ( '$nombre', '$descripcion','$precio_unitario', '$unidades', '$urlImage', '$idmarca', '$idtipo_producto' )";
        echo $this->query;
         $this->setQuery();
     }

    public function create( $data = array()){
       ;
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        $this->query = "INSERT INTO producto ( nombre, descripcion, precio_unitario, unidades
                          dir_foto, idmarca, idtipo_producto) VALUES ( '$nombre', '$descripcion', 
                          '$precio_unitario', '$unidades', '$urlImage', '$idmarca', '$idtipo_producto' )";
        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ?  "SELECT nombre, descripcion, precio, unidades, dir_foto, marca, tipo  FROM producto, tipo_producto, marca
                        WHERE producto.id = $id AND producto.idtipo_producto = tipo_producto.id AND producto.idmarca = marca.id;" 
                        : "SELECT * FROM articulos;";
        $this->getQuery();
        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE producto SET id = $id, nombre = '$nombre', descripcion = '$descripcion', 
                               precio_unitario = '$precio_unitario', cantidad = '$cantidad'
                               condicion = '$condicion', fecha_publicacion = '$fecha_publicacion', direccion_foto = '$direccion_foto'
                               catalogo_tipo_id = '$catalogo_tipo_id', usuario_id = '$usuario_id' WHERE id = $id";
        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM producto WHERE id = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM producto ORDER BY id;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }

  

}