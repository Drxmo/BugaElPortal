<?php

use FStudio\fsController as controller;

class categoriasUsuario extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'categoriasUsuario', 'html');
  }

}
