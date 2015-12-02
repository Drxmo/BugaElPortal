<?php

use FStudio\fsController as controller;

class busqueda extends controller {

  public function execute() {
    $this->defineView('home', 'busqueda', 'html');
  }

}
