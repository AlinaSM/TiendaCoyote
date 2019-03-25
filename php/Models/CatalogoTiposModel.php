<?php
require_once('Model.php');

class CatalogoTiposModel extends Model{
    private $id;
    private $tipo;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "INSERT INTO tipo_producto( tipo ) VALUES ( '$tipo' )";
        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM tipo_producto WHERE id = $id;" 
                        : "SELECT * FROM tipo_producto;";
        $this->getQuery();
        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE tipo_producto SET id = $id, tipo = '$tipo' WHERE id = $id";
        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM tipo_producto WHERE id = $id";
        $this->setQuery();
    }

}