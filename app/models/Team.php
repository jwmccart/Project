<?php
class Team
{

  public $id;
  public $name;
  public $hourly_rate;

  public function __construct($data) {
    $this->id = intval($data['id']);
    $this->name = $data['name'];
    $this->hourly_rate = floatval($data['hourly_rate']);




  }
  public static function fetchAll(int $data) {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    // 2. Prepare the query
    $sql = 'SELECT * FROM Teams ';
    $statement = $db->prepare($sql);

    // 3. Run the query
    $success = $statement->execute();

    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

      // 4.a. For each row, make a new work object
      $theTeam =  new Team($row);
      array_push($arr, $theTeam);

    }

    // 4.b. return the array of work objects
    return $arr;

  }

}
