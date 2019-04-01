<?php
require_once('Model.php');

class EstadosModel extends Model{
    private $id;
    private $estado;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO estados ( estado ) VALUES ( '$estado' ) ";
        $this->setQuery();
    }
   

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM estados WHERE id = $id ORDER BY id;" 
                        : "SELECT * FROM estados ORDER BY id;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE estados SET id = $id, estado = '$estado'  WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM estados WHERE estado = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM estados ORDER BY id;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }

    public function hasMunicipios($id){
        $this->query = "SELECT  municipios.id AS id, municipio FROM estados, municipios 
                        WHERE estados.id = $id AND estados.id = municipios.estados_id ORDER BY municipios.id;"  ;
        $this->getQuery();

        return $this->rows;
    }

}