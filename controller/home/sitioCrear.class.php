<?php

use FStudio\fsController as controller;

class sitioCrear extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'sitioCrear', 'html');
  }

}
