<?php
require_once('Model.php');

class DireccionModel extends Model{
    private $id;
    private $colonia;
    private $calle;
    private $num_ext;
    private $num_int;
    private $idEstado;
    private $idMunicipio;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = " INSERT INTO direccion ( colonia, calle, num_ext, num_int, estados_id, municipios_id) 
                         VALUES ( '$colonia' , '$calle' , '$num_ext' , '$num_int' , $estados_id , $municipios_id );";

        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM direccion WHERE id = $id;" 
                        : "SELECT * FROM direccion;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE direccion SET id = $id, email = '$email'  WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM direccion WHERE id = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM direccion ORDER BY id;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }

   

}