<?php

class Worked{
  public $work_id;
  public $task_id;
  public $team_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function __construct($data) {
    //TODO
  }

  public static function findByTaskId($taskId) {
    //1. Get db connection
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    //2. Prepare a query

    //3. Execute query
  }
}
