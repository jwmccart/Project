<?


require '../../app/common.php';



//Fetch Work from database
$teams = Team::featchAll();

//convert to JSON and print
$json = json_encode($teams, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json;
