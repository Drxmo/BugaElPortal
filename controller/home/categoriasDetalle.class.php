<?php

use FStudio\fsController as controller;

class categoriasDetalle extends controller {

  public function execute() {
    $this->defineView('home', 'categoriasDetalle', 'html');
  }

}
