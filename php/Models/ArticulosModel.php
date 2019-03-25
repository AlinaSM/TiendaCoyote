<?php
require_once('Model.php');

class ArticulosModel extends Model{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio_unitario;
    private $cantidad;
    private $condicion;
    private $fecha_publicacion;
    private $catalogo_tipo_id;
    private $usuario_id;
    private $direccion_foto;

    public function create( $data = array(), $urlImage){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        $this->query = "INSERT INTO articulos( nombre, descripcion, precio_unitario, cantidad
                          condicion, fecha_publicacion, direccion_foto, catalogo_tipo_id, usuario_id) VALUES ( '$nombre', '$descripcion', 
                          '$precio_unitario', '$cantidad', '$condicion', '$fecha_publicacion', '$urlImage', '$catalogo_tipo_id', '$usuario_id' )";
        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ?  "SELECT articulos.nombre, descripcion, precio_unitario, cantidad
                            condicion, fecha_publicacion, direccion_foto, catalogo_tipo_id, usuario_id, usuario.username, catalogo_tipo.tipo
                            FROM articulos, catalogo_tipo, usuario
                            WHERE articulos.id = $id AND usuario_id = usuario.id AND catalogo_tipo_id = catalogo_tipo.id;" 
                        : "SELECT * FROM articulos;";
        $this->getQuery();
        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE articulos SET id = $id, nombre = '$nombre', descripcion = '$descripcion', 
                               precio_unitario = '$precio_unitario', cantidad = '$cantidad'
                               condicion = '$condicion', fecha_publicacion = '$fecha_publicacion', direccion_foto = '$direccion_foto'
                               catalogo_tipo_id = '$catalogo_tipo_id', usuario_id = '$usuario_id' WHERE id = $id";
        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM articulos WHERE id = $id";
        $this->setQuery();
    }

  

}