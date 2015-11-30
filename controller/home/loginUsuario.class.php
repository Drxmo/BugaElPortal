<?php
use FStudio\fsController as controller;
/**
 * Description of loginUsuario
 *
 * @author balem
 */
class loginUsuario extends controller {
public function execute() {
    $this->defineView('home/seguridad', 'loginUsuario', 'html');
  }
}
