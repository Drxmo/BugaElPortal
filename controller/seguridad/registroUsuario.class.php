<?php
require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';
require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of registrar
 *
 * @author Alzate
 */

class registrar extends controller implements action {
    public function execute() {
        $config = $this->getConfig();

        if (filter_has_var(INPUT_POST, 'registro') === true) {
            $registro = filter_input_array(INPUT_POST)['registro'];
            $usuario = new usuarioTable($config);
            $usuario->setId($usuario->nextId());
            $usuario->setUsuario($registro['nick']);
            $usuario->setPassword($registro['password']);
            $usuario->setActivado(1);
            $usuario->setRolId(2);
            $id = $usuario->save();
            $datoUsuario = new datoUsuarioTable($config);
            $datoUsuario->setId($datoUsuario->nextId());
            $datoUsuario->setUsuarioId($id);
            $datoUsuario->setNombre($registro['nombre']);
            $datoUsuario->setApellidos($registro['apellidos']);
            $datoUsuario->setCorreo($registro['email']);
            $datoUsuario->setFechaNacimiento($registro['fecha']);
            $datoUsuario->setGenero($registro['genero']);
            $datoUsuario->save();
            $_SESSION['registroSuccess'] = 'Usuario registrado exitosamente';
        }
        header("Location:" . $config->getUrl() . "index.php/home/loginUsuario");
        exit();
    }
}