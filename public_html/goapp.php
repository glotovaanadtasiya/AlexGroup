<?php


$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");


$file = @fopen("goappstat", 'a+');
@fwrite($file, "\n".date("d.m.y H:i:s")."__".($iPod || $iPhone || $iPad?"iOs":($Android?"Android":"Other"))."__".$_SERVER['REQUEST_URI']."\n");
@fclose($file);


if( $iPod || $iPhone || $iPad ) header("Location: https://apps.apple.com/ua/app/motelspb-%D1%81%D0%B5%D1%82%D1%8C-%D0%BC%D0%B8%D0%BD%D0%B8%D0%BE%D1%82%D0%B5%D0%BB%D0%B5%D0%B9-%D0%B2-%D1%81%D0%BF%D0%B1/id1029435175");
else if($Android) header("Location: https://play.google.com/store/apps/details?id=com.wideweb.motelspb&hl=ru");
else header("Location: https://motelspb.com/prilozhenie/");


?>