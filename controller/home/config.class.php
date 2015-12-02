<?php

use FStudio\fsController as controller;

class config extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'config', 'html');
  }

}
