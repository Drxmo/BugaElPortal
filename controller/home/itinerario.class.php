<?php

use FStudio\fsController as controller;

class itinerario extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'itinerario', 'html');
  }

}
