<?php

use FStudio\fsController as controller;

class panelControl extends controller {

  public function execute() {
    $this->defineView('home/usuario', 'panelControl', 'html');
  }

}
