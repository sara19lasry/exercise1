
<?php
  require_once('connection.php');

  class Part {
    // they are public so that we can access them directly
    public $id;
    public $carComponent;
    public $price;
    public $description;
    public $sourceCarModel;

    public function __construct($id, $carComponent, $price,$description,$sourceCarModel) {

      $this->id              = $id;
      $this->$carComponent   = $carComponent;
      $this->price           = $price;
      $this->description     =$description;
    }

    public static function all() {
      //get all the parts  
      $partList = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM part');
      while($part = $req->fetch_assoc()) {
        $partList[] = new Part($part['id'], $part['car_component'], $part['price'],$part['description']);
      }
      return $partList;
    }

     //!!!!!I understand from this sentence :"• Allow company managers to view a list of spare parts currently on stock, along with quantity" that it list of cars components!!!!!

      public static function showStock() {
      //get all the parts  group by component
      $componentList = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT component_name,count(1) as sum_in_stock FROM part as p
                                            JOIN component_type_name as c on c.id=p.car_component
                         GROUP BY  car_component');

      while($component = $req->fetch_assoc()) {
      $componentList[] = array($component['component_name'],$component['sum_in_stock']);
      }
      return $componentList;
    }
    
    public static function inStock() {
      //get only the parts that is inStock  
      $partList = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM part where inStock=true');
      while($part = $req->fetch_assoc()) {
        $partList[] = new Part($part['id'], $part['car_component'], $part['price'],$part['description'],$part['source_model_car']);
      }
      return $partList;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['author'], $post['content']);
    }
  }
?>