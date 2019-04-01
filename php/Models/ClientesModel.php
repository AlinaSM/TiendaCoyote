<?php
require_once('Model.php');

class ClientesModel extends Model{
    private $id;
    private $alias;
    private $nombre;
    private $apellidos;
    private $contrasena;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO clientes ( nombre, apellidos, alias, contrasena ) 
                        VALUES ( '$nombre', '$apellido', '$alias', MD5('$contrasena') )";

        $this->setQuery();
    }

    public function read( $id ='' ){
        $this->query =  $id != '' 
                        ? "SELECT * FROM usuario WHERE id = $id;" 
                        : "SELECT * FROM usuario;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE clientes SET id = $id, alias = '$username', nombre = '$nombre', 
                        apellidos = '$apellidos', contrasena = MD5('$contrasena') WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM clientes WHERE id = $id";
        $this->setQuery();
    }

    public function validate( $cliente = '', $password = '' ){
        $this->query =  "SELECT * FROM clientes WHERE alias = '$cliente' AND contrasena = MD5('$password');";
        $this->getQuery();

        $data = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;        
    }

    public function lastId(){
        $this->query = "SELECT * FROM clientes;";
        $this->getQuery();
        $last_element = array_pop( $this->rows );
        return $last_element['id'];
    }


    public function HasEmail( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO clientes_has_email (clientes_id, email_id) VALUES ('$clientes_id', '$email_id');";
        $this->setQuery();
    }

    public function HasTelefono( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un numero telefonico al cliente
        $this->query = "INSERT INTO telefono (idclientes, telefono) VALUES ('$clientes_id', '$telefono');";
        $this->setQuery();
    }

    public function addDireccion( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar una direccion al cliente
        $this->query = "INSERT INTO direccion_has_clientes ( direccion_id , clientes_id ) VALUES ($direccion_id, $clientes_id)";
        $this->setQuery();
    }

}