<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of login
 *
 * @author Alzate
 */
class login extends controller implements action {

    public function execute() {
        $config = $this->getConfig();
        if (filter_has_var(INPUT_POST, 'login') === TRUE) {
            $user = filter_input_array(INPUT_POST)['login']['user'];
            $password = filter_input_array(INPUT_POST)['login']['password'];

            $usuario = new usuarioTable($config);
            $usuario->setUsuario($user);
            $usuario->setPassword($password);

            if ($id = $usuario->verificarUsuario() !== FALSE) {
                $datosUsuario = $usuario->getById($id); //getDataByUserPassword();
                if ($datosUsuario !== FALSE) {
                    $_SESSION['user']['id'] = $datosUsuario->id;
                    $_SESSION['user']['nombre'] = $datosUsuario->nombre;
                } else {
                    throw new Exception('Ocurrio un error usuario no existente');
                }
            } else {
                $_SESSION['usuarioInvalido'] = 'Datos de usuario son inválidos';
                header("Location:" . $config->getUrl() . "index.php/home/loginUsuario");
                exit();
            }
        }
    }

}
