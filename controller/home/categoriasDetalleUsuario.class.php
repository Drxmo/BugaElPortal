<?php

use FStudio\fsController as controller;

class categoriasDetalleUsuario extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'categoriasDetalleUsuario', 'html');
  }

}
