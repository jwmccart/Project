<?

//Get the TaskId
$taskId = $_GET['taskId'] ?? 0;

//Fetch Work from database
$work = Work::findByTaskId($taskId);

//convert to JSON and print
echo json_encode($work);
