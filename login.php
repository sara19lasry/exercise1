<?php
require_once('connection.php');

$_POST['user_name'] ='c1@df.dd.fr';
$_POST['user_password']=231456;
$db = Db::getInstance();
 $query    = "SELECT * FROM user  join user_type_name on user.type =user_type_name.id WHERE email ='{$_POST["user_name"] }' and password='{$_POST["user_password"]}'";
$result   = mysqli_query($db,$query);
$user  = mysqli_fetch_assoc($result);
  print_r($user);
if($user){
  require_once('views/layout.php');//this is the html structre include route file that have the function call to call controller 
}
else{
  header("location: index.php?err=user name or password are incorect");
}

  ?>