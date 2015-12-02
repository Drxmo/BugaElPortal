<?php

use FStudio\fsController as controller;

class evento extends controller {

  public function execute() {
    $this->defineView('home', 'evento', 'html');
  }

}
