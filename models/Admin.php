<?php

namespace Model;

use Model\ActiveRecord;

class Admin extends ActiveRecord {
    // Base DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'email'];
    protected static $errores = [];
    protected static $db; // Ensure this is initialized in ActiveRecord or Admin class

    public $id;
    public $nombre;
    public $email;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$errores[] = "El Nombre del usuario es obligatorio";
        }
        if(!$this->email) {
            self::$errores[] = "El Password del usuario es obligatorio";
        }
        return self::$errores;
    }

    public function existeUsuario() {
        // Revisar si el usuario existe.
        $query = "SELECT * FROM" . self::$tabla . " WHERE nombre = '" . $this->nombre . "' LIMIT 1";
        
        $resultado = self::$db->query($query);

        if(!$resultado->num_rows) {
            self::$errores[] = 'El Usuario No Existe';

            return;
        }
        return $resultado;
    }
       

    public function verificarPassword($resultado) {
        $usuario = $resultado->fetch_object();
        $autenticado = password_verify($this->password, $usuario['password']);

        
        if(!$autenticado) {
            self::$errores[] = 'El password es incorrecto';
        }
        return $autenticado;
    }
    // El usuario esta autenticado
    public function autenticar() {
        session_start();

        // Llenar el arreglo de la session
        $_SESSION['usuario'] = $this->nombre;
        $_SESSION['logging'] = true;

        header('Location: /admin');
    }
}       
            

          