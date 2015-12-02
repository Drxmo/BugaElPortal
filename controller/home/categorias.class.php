<?php

use FStudio\fsController as controller;

class categorias extends controller {

  public function execute() {
    $this->defineView('home', 'categorias', 'html');
  }

}
