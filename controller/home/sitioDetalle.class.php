<?php

use FStudio\fsController as controller;

class sitioDetalle extends controller {

  public function execute() {
    $this->defineView('home', 'sitioDetalle', 'html');
  }

}
