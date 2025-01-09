<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <style>
 
body {
	background: #fcb503; 
	color: #fff;
	text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
	flex-wrap: wrap;
	min-height: 100vh;
	flex-direction: column;
	font-family: sans-serif;
}

.page {width: 720px; max-width: 100%; margin-bottom: 10px;}

.tnx_button {
	display: inline-block;
	padding: 12px 10px;
	font-size: 18px;
	background: #5d3b8f;
	border-radius: 10px;
	color: #fff;
	font-weight: 600;
	text-decoration: none;
	max-width: 95%;
	margin-top: 25px;
}
.tnx_title {
	color: #261c35;
	text-transform: uppercase;
	font-weight: 700;
	font-size: 24px;
}
.tnx_txt {
	margin-top: 15px;
	color: #261c35;
	font-size: 22px;
}

@media (width>600px) {
	.tnx_title { font-size: 32px; }
	.tnx_txt { font-size: 24px;}
}

  </style>

</head>
<body>
<!--img src="tnx.png" class="page"--> 
<div class="tnx_title">Спасибо за вашу высокую&nbsp;оценку!</div>
<div class="tnx_txt">Мы стараемся для комфорта наших гостей.</div>
<div class="tnx_txt">Будем благодарны за отзыв.</div>
<? $hotels=[ 
	"fontanka"=> "https://yandex.ru/maps/org/aleks_otel/182874485114/reviews/?add-review=true",
	"jukovsk"=>"https://yandex.ru/maps/org/aleks_otel/67149411600/reviews/?add-review=true",
	"petrograd"=>"https://yandex.ru/maps/org/aleks_otel/105843446917/reviews/?add-review=true",
	"rybat"=>"https://yandex.ru/maps/org/aleks_otel/200820774055/reviews/?add-review=true",
	"narvsk"=>"https://yandex.ru/maps/org/aleks_otel/41788911053/reviews/?add-review=true",
	"kosig"=>"https://yandex.ru/maps/org/aleks_otel/1681742078/reviews/?add-review=true",
	"zvezd"=>"https://yandex.ru/maps/org/aleks_otel_na_zvezdnoy/5750370063/reviews/?add-review=true",
	"prosvet"=>"https://yandex.ru/maps/org/aleks_otel/138228963792/reviews/?add-review=true",
	"frunz"=>"https://yandex.ru/maps/org/aleks_otel/153822784924/reviews/?add-review=true",
	"jukova"=>"https://yandex.ru/maps/org/aleks_otel_na_zhukova/1364456625/reviews/?add-review=true",
	"vaska"=>"https://yandex.ru/maps/org/aleks_otel/1190222180/reviews/?add-review=true",
	"kupchino"=>"https://yandex.ru/maps/org/aleks_otel/1389073438/reviews/?add-review=true",
	"dybenko"=>"https://yandex.ru/maps/org/aleks_otel/88730150244/reviews/?add-review=true",
	"muzh"=>"https://yandex.ru/maps/org/aleks_otel/1035687304/reviews/?add-review=true",
	"bogat"=>"https://yandex.ru/maps/org/aleks_otel/1134227830/reviews/?add-review=true",
	];

?>
<a href="<?=$hotels[$_GET["hotel"]]?>" class="tnx_button">Оставить отзыв на&nbsp;Яндекс&nbsp;Картах</a>

</body>
</html>