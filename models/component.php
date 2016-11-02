<?php
  class Component {
     public $cname;
    public $id;

    public function __construct($id, $name) {
      $this->id      = $id;
      $this->cname=$name;
    }

    public static function all() {
      $componentlList = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM component_type_name');

      // we create a list of carModel objects from the database results
      while($component = $req->fetch_assoc()) {
        $componentlList[] = new Component($component['id'], $component['name']);
      }
      return $componentlList;
    }
  }

?>