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
        $this->query = "INSERT INTO email ( email )  VALUES (  '$email' )";

        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM email WHERE id = $id;" 
                        : "SELECT * FROM email;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE email SET id = $id, email = '$email'  WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM email WHERE id = $id";
        $this->setQuery();
    }

    public function lastId(){
        $this->query = "SELECT * FROM email;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }


}