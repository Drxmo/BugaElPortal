<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

class logOut extends controller implements action {

  public function execute() {
    
    if (isset($_SESSION['user']) === TRUE) {
      unset($_SESSION['user']);
    }
    $config = $this->getConfig();
    $index=$config->getUrl().'index.php';
    header("Location: $index");
    exit();
  }

}
