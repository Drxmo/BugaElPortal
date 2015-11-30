<?php
use FStudio\fsController as controller;
/**
 * Description of index
 *
 * @author balem
 */
class index extends controller{
  public function execute() {
    $this->defineView('home', 'index', 'html');
  }
}
