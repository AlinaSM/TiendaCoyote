<?php
require_once('Model.php');

class MarcaModel extends Model{
    private $id;
    private $marca;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO marca ( marca ) VALUES ( '$marca' ) ";
        $this->setQuery();
    }
   

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM marca WHERE id = $id ORDER BY id;" 
                        : "SELECT * FROM marca ORDER BY id;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE marca SET id = $id, marca = '$marca'  WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM marca WHERE id = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM marca ORDER BY id;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }


}