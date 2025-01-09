<?php

if (!$_GET['t']==1) die();

$url = "http://178.130.14.194:8095/WebBook/api1_1.php"; //
	
	$data = [
		"action"=> "start",
		"auth"=> [
			"login"=> "guest",
			"pass"=> ""
			],
		"app_token"=> "9EFD4B81-DDEA-4805-A221-49E37E2AD387"
	];

	
$postdata = json_encode($data);

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);

$result = json_decode($result, true);
echo "<pre>";
print_r ($result);
echo "</pre>";

?>