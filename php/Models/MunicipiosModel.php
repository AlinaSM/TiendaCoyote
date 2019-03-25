<?php
require_once('Model.php');

class MunicipiosModel extends Model{
    private $id;
    private $municipio;
    private $idEstado;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO municipios ( municipio, idEstado )  VALUES ( '$municipio' )";

        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM municipios WHERE id = $id;" 
                        : "SELECT * FROM municipios;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE municipios SET id = $id, municipio = '$municipio', idEstado = '$idEstado'  WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM municipios WHERE id = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM municipios;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }


}