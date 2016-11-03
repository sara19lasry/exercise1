<?php
  class ManagerController {

    //the index function is the default function
    public function index() {
      $parts = Part::inStock();
      require_once('../views/parts/index.php');
      $this->displayForm();   
    }

     public function displayForm() {
      //load all the lists in the form they have use
      $components = Component::all();
      $cars       = CarModel::all();
      require_once('../views/parts/form.php'); 
    }
    
      public function insertPart($id, $carComponent, $price,$description) {
      //insert part into db 
      $parts->insertPart();
      //the echo will be append to the bottom of the list by the sucess function
      
    }


  }
?>