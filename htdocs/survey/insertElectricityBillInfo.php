<!DOCTYPE html>
<html>
<body>

<?php 
$api = 'http://localhost:8080/esave/rest/user';
$url = $api . '/save_user_billing_information'; 
$list = array();
session_start();
 if ( isset($_SESSION['list'])) {
      $list = $_SESSION['list'];
   }
$data = json_encode($list);
$options = ["http" => [
	"method" => "POST",
    "header" => ["Content-Type: application/json"],
    "content" => $data
    ]];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
echo "Data Inserted into database"; 
header("Location: http://localhost/survey/usage_report.php");
?>

</body>
</html>


