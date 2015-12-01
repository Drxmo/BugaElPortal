<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of logOut
 *
 * @author TPS CésarD
 */
class logOut extends controller implements action{
    
   public function execute() {
       $config=  $this->getConfig();
        if(isset($_SESSION['user'])===TRUE){
            unset($_SESSION['user']);
        }
        header("Location:" . $config->getUrl() . "index.php");
    }

}