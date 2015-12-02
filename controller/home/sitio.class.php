<?php

use FStudio\fsController as controller;

class sitio extends controller {

  public function execute() {
    $this->defineView('home', 'sitio', 'html');
  }

}
