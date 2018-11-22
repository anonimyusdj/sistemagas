<?php

  class MasterController{
  
  
    public function home(){
      require_once "views/partes/header.php";
      //require_once "views/home/menu.php";
      require_once "views/master/home.php";
      require_once "views/partes/footer.php";
    }
  }
