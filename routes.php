<?php
//this is the route file it will create controller object and naviage to the controller->action
require_once('models/part.php');
require_once('models/component.php');
require_once('models/carModel.php');


function call($controller, $action) {
$controller = strtolower($controller);
require_once('controllers/' . $controller . '_controller.php');
switch($controller) {
  case "insert_part":    
    $controller = new IndexCustomerController();
  break;
  case "manager":
    $controller = new ManagerController();
  break;
  }
//call to the action
$controller->{ $action }();
}

  // we're adding an entry for the new controller and its actions
  //its a list of all the controller with action
  $controllers = array('manager' => ['index', 'displayForm','insertPart'],
                       'customer' => ['index', 'show']);

if(isset($_POST['controller']) && isset($_POST['action'] ))
{
  $controller=$_POST['controller'] ;
  $action    =$_POST['action']     ;
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) 
      call($controller, $action);
  }
}
else{
  echo $user['type_name'];
   if($user['type_name']=='Manager')
   call('manager','index');
}


?>