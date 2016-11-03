
  <?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $servername = "localhost";
		$username = "root";
		$password = "";
        self::$instance = mysqli_connect($servername, $username, $password,"matrix_test");
        if (!self::$instance) 
          die("Connection failed: " . mysqli_connect_error());
      }
      return self::$instance;
    }
  }

