<?php
  class CarModel {
    public $company;
    public $id;
    public $model_name;

    public function __construct($mid, $mcompany, $mmodel_name) {
      $this->company = $mcompany;
      $this->id      = $mid;
      $this->model_name = $mmodel_name;
    }

    public static function all() {
      $carModelList = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM car_model');
      // we create a list of carModel objects from the database results
      while($carModel = $req->fetch_assoc()) {
        $carModelList[] = new CarModel($carModel['id'], $carModel['company'], $carModel['model_name']);
      }
      return $carModelList;
    }
  }
?>