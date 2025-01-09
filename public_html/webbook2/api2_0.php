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
	

function ResponseCorsAllowed(){

	/*
		Access-Control-Allow-Origin - сообщает браузеру, какие источники могут получить доступ к ресурсу. 
		Он может содержать название самого источника (например, https://postman.com), или можно использовать символ подстановки - *.
	*/	
	header("Access-Control-Allow-Origin: *");

	/*
		Access-Control-Allow-Credentials - является булевым значением, которое указывает, должен ли браузер добавлять учетные данные 
		(файлы cookie или учетные данные аутентификации HTTP) при выполнении cross-origin запроса.
		Если false установлено в ответ на preflight request, то учетные данные не должны включатся в фактический запрос.
		Если простой запрос сделан с этим заголовком установлен в false, то браузер не будет включать этот Credential в основной запрос.
		
		!!! ХЗ !!!
	*/	

	/*
		Access-Control-Allow-Methods - используется в ответе на "preflight request" для указания разрешенных методов запроса в основном запросе. Пример:
		GET, POST, OPTIONS
	*/
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	
	/*
		Access-Control-Allow-Headers - используется в ответе на "preflight request" для указания разрешенных заголовков в основном запросе. Пример:
		DNT,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Range
	
		!!! ХЗ !!!
	*/
	header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');	
	
	/*
		Access-Control-Expose-Headers - указывает, какие заголовки могут быть доступны для браузера. Любой заголовок, не указанный здесь, не будет доступен для кода JavaScript на стороне клиента. Пример:
		Content-Length,Content-Range
		
		!!! ХЗ !!!
		
		
		Access-Control-Max-Age - указывает максимальное время (в секундах), в течение которого ответ на "preflight request" может быть кэширован.	
		
		!!! ХЗ !!!
	*/
}

ResponseCorsAllowed();

if($_SERVER['REQUEST_METHOD'] != "POST" ) return;

/* распарсивание json, подмешивание и обратная сборка нахрен
$postdata = json_decode(file_get_contents('php://input'), true);	

//$postdata = file_get_contents('php://input');
	
#$postdata["app_token"] = '35CE9672-8E4F-4DAE-8665-68FF915287A7';

$postdata = json_encode($postdata);
*/

$postdata = json_decode(file_get_contents('php://input'), true);	

$file = @fopen("gate.log", 'a+');
@fwrite($file, "\n".date("d.m.y H:i:s")."\n");
for( $i=0; $i<count($_POST); $i++ )
    @fwrite($file, "Post: ".$_POST[i]."\n");
for( $i=0; $i<count($_REQUEST); $i++ )
    @fwrite($file, "Request: ".$_REQUEST[i]."\n");

@fclose($file);

if( isset($_POST['action']) ){
    $postdata['action'] = $_POST['action'];
}
else {
    if( isset($_REQUEST['action']) ){
        $postdata['action'] = $_REQUEST['action'];
    }
}

$postdata = json_encode($postdata);

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);

//$result = json_decode($result, true);

/* лог пока нахрен
$file = @fopen("gate.log", 'a+');
@fwrite($file, "\n".date("d.m.y H:i:s")."__".$postdata."\n\n".$result."----------------------------------------\n");
@fclose($file);
*/

echo $result;

?>