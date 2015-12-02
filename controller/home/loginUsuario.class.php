<?php

use FStudio\fsController as controller;

class loginUsuario extends controller {

  public function execute() {
    $this->defineView('home/seguridad', 'loginUsuario', 'html');
  }

}
