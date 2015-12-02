<?php

use FStudio\fsController as controller;

class eventoUsuario extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'eventoUsuario', 'html');
  }

}
