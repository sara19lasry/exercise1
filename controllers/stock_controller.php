<?php
  class ManagerController {
    //the index function is the default function
    public function index() {
      //load all the lists in the form they have use
      $components = Component::all();
      $cars       = CarModel::all();
      print_r($cars);
      require_once('views/parts/form.php');
      $parts = Part::inStock();
      require_once('views/parts/index.php');
      
    }


  }
?>