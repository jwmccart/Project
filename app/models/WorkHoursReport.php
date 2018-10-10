<?php

class WorkHoursReport
{

  public static function fetchByProjectId(int $projectId) {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);

    // 2. Prepare the query
    $sql = 'SELECT DATE(start_date) AS date,
              SUM(hours) AS hours
            FROM Work, Tasks
            WHERE Work.task_id = Tasks.id
              AND Tasks.project_id = ?
            GROUP BY DATE(start_date)
            ORDER BY date';

    $statement = $db->prepare($sql);

    // 3. Run the query
    $success = $statement->execute(
        [$projectId]
    );

    // 4. Handle the results
    $arr = $statement-fetchAll(PDO::FETCH_ASSOC);

    return $arr;
