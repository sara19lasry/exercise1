<?php
require_once('models/part.php');
require_once('models/component.php');
require_once('models/carModel.php');

      switch($user['type_name']) {
      case "Customer":    
         require_once('controllers/order_controller.php');
        $controller = new CustomerController();
      break;
      case "Manager":
         require_once('controllers/stock_controller.php');
        $controller = new ManagerController();
      break;
      }
      $controller->index();
?>