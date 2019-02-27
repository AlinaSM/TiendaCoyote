<?php

class UsuariosModel extends Model{
    private $id;
    private $alias;
    private $nombre;
    private $apellidos;
    private $fecha_nac;
    private $contrasena;
    private $email;
    private $tipo;


    public function create( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "INSERT INTO usuario( username, nombre, apellidos,  contrasena, email, tipo, direccion) 
                        VALUES ( '$username', '$nombre', '$apellido', MD5('$contrasena'), '$email', '$tipo', '$direccion')";

        $this->setQuery();
    }

    public function read( $id_usuario ='' ){
        $this->query =  $id_usuario != '' 
                        ? "SELECT * FROM usuario WHERE id = $id_usuario;" 
                        : "SELECT * FROM usuario;";
        $this->getQuery();

        return $this->rows;
    }

    public function update( $usuario_data = array() ){
        foreach($usuario_data as $key => $value){
            //Variables variables (variable dinamica)
            $$key = $value;
        }

        $this->query = "UPDATE usuario SET id = $id, username = '$username', 
                        nombre = '$nombre', apellidos = '$apellidos', fecha_nac = '$fecha_nac', 
                        contrasena = MD5('$contrasena'), email = '$email', tipo = '$tipo' WHERE id = $id";

        $this->setQuery();
    }

    public function delete( $id = '' ){
        $this->query = "DELETE FROM usuario WHERE id = $id";
        $this->setQuery();
    }

    public function validate( $username = '', $password = '' ){
        $this->query =  "SELECT * FROM usuario WHERE username = '$username' AND contrasena = MD5('$password');";
        $this->getQuery();

        $data = array();
        
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;

        
    }

}