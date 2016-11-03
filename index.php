
<?php
if(isset($_GET['err']))  echo $_GET['err']; 
?>
<form method="post" action="cnf/login.php">
    Welecome!<br>
	email<input type="text"     id="user_name"     required></input>
	password<input type="password" id="user_password"  required></input>
	<input type="submit" >
</form>