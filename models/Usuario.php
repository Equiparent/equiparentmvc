<?php

namespace Model;

use Model\ActiveRecord;

class Usuario extends ActiveRecord {
    // Base DE DATOS
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'password'];
    
    public $id;
    public $nombre;
    public $password;

    // Define the static property for errors
    protected static $errores = [];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    public function validar() {
        // Initialize errors array to avoid accumulation of errors
        self::$errores = [];

        if(!$this->nombre) {
            self::$errores[] = "El Nombre de Usuario es Obligatorio";
        }

        if(!$this->password) {
            self::$errores[] = "El Password es Obligatorio";
        }

        return self::$errores;
    }
}