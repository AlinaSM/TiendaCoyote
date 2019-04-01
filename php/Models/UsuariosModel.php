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
        $this->query = "INSERT INTO usuario ( nombre, apellidos, tipo, alias, contrasena) 
                        VALUES ( '$nombre', '$apellido', '$tipo', '$alias', MD5('$contrasena') )";

        $this->setQuery();
    }

    public function read( $id_usuario ='' ){
        $this->query =  $id_usuario != '' 
                        ? "SELECT * FROM usuario WHERE id = $id_usuario;" 
                        : "SELECT * FROM usuario ORDER BY id;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE usuario SET id = $id, alias = '$username', nombre = '$nombre', 
                        apellidos = '$apellidos', contrasena = MD5('$contrasena'), tipo = '$tipo' WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM usuario WHERE id = $id";
        $this->setQuery();
    }

    public function validate( $username = '', $password = '' ){
        $this->query =  "SELECT * FROM usuario WHERE alias = '$username' AND contrasena = MD5('$password');";
        $this->getQuery();

        $data = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;        
    }

    public function lastId(){
        $this->query = "SELECT * FROM usuario ORDER BY id;";
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
        $this->query = "INSERT INTO usuario_has_email (usuario_id, email_id) VALUES ('$usuario_id', '$email_id');";
        $this->setQuery();
    }


}