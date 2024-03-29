<?php

use FStudio\fsController as controller;

/**
 * Description of index
 *
 * @author Drx
 */
class index extends controller implements action{

    public function execute() {
        $config = $this->getConfig();

        if (isset($_SESSION['user']) === true) {
            $index = $config->getUrl() . 'index.php/home/index';
            header("Location: $index");
            exit();
        } else {
            $this->titulo = 'Identificación del sistema';
            $this->btCSS = $config->getUrl() . 'css/bootstrap.min.css';
            $this->bttCSS = $config->getUrl() . 'css/bootstrap-theme.min.css';
            $this->signinCSS = $config->getUrl() . 'css/signin.css';
            $this->jqJS = $config->getUrl() . 'css/jquery-1.11.3.min.js';
            $this->btJS = $config->getUrl() . 'css/bootstrap.min.js';
            $this->loginForm = $config->getUrl() . 'index.php/seguridad/loginUsuario';
            $this->registroURL = $config->getUrl() . 'index.php/seguridad/registroUsuario';
            $this->defineView('home/seguridad', 'loginUsuario', 'html');
//    include '../../view/home/seguridad/loginUsuario.html.php';
        }
    }

}
