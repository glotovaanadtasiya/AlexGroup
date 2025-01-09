<?php

header('Content-Type: application/json; charset=utf-8');

$url = "http://5.17.30.142:8095/WebBook2/api2_0.php"; //
	
	/*$data = [
		"action"=> "start",
		"auth"=> [
			"login"=> "guest",
			"pass"=> ""
			],
		"app_token"=> "9EFD4B81-DDEA-4805-A221-49E37E2AD387"
	];*/
	


$postdata = json_decode(file_get_contents('php://input'), true);	

//$postdata = file_get_contents('php://input');
	
#$postdata["app_token"] = '35CE9672-8E4F-4DAE-8665-68FF915287A7';

$postdata = json_encode($postdata);


$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);

//$result = json_decode($result, true);


$file = @fopen("gate.log", 'a+');
@fwrite($file, "\n".date("d.m.y H:i:s")."__".$postdata."\n\n".$result."----------------------------------------\n");
@fclose($file);


echo $result;

?>