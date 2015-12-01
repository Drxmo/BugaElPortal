<?php

use FStudio\fsController as controller;

/**
 * Description of registroUsuario
 *
 * @author balem
 */
class registroUsuario extends controller {

    public function execute() {
        $this->defineView('home/seguridad', 'registroUsuario', 'html');
    }

}
