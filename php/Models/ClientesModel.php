<?php
require_once('Model.php');

class UsuariosModel extends Model{
    private $id;
    private $alias;
    private $nombre;
    private $apellidos;
    private $contrasena;
    private $tipo;

    public function create( $data = array() ){
        foreach($data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }
        //Sentencia de MySQL para insertar un registro
        $this->query = "INSERT INTO clientes ( nombre, apellidos, alias, contrasena) 
                        VALUES  (  '$nombre', '$apellido', '$username', MD5('$contrasena') )";

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

    public function validate( $username = '', $password = '' ){
        $this->query =  "SELECT * FROM clientes WHERE alias = '$username' AND contrasena = MD5('$password');";
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

}