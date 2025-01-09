<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <style>
 
 
 @charset "UTF-8";

@font-face {
	font-family:"Ghotham Pro";font-weight:400;font-style:normal;font-display:swap;src:url(font/GothamProRegular.eot);src:url(font/GothamProRegular.eot?#iefix) format("embedded-opentype"),url(font/GothamProRegular.woff) format("woff"),url(font/GothamProRegular.ttf) format("truetype");
}

@font-face {
	font-family:"Ghotham Pro";font-weight:500;font-style:normal;font-display:swap;src:url(font/GothamProMedium.eot);src:url(font/GothamProMedium.eot?#iefix) format("embedded-opentype"),url(font/GothamProMedium.woff) format("woff"),url(font/GothamProMedium.ttf) format("truetype");
}

@font-face {
	font-family:"Ghotham Pro";font-weight:700;font-style:normal;font-display:swap;src:url(font/GothamProBold.eot);src:url(font/GothamProBold.eot?#iefix) format("embedded-opentype"),url(font/GothamProBold.woff) format("woff"),url(font/GothamProBold.ttf) format("truetype");
}



body {
	background: #5d3b8f; 
	font-family: "Ghotham Pro",sans-serif;
	font-weight: 600;
	color: #fff;
	text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
	flex-wrap: wrap;
	min-height: 100vh;
	flex-direction: column;
}
body>div {width: 100%;}
.yellow-text {
	color: #fedc00;
}	
.uppercase {
	text-transform: uppercase;
}
.hotel-title {font-size: 17px; margin-top: 5px;}
.question {margin-top: 25px; margin-bottom: 20px; font-size: 22px;}
.logo {width: 200px; max-width: 80%;}
.page {width: 720px; max-width: 75%; margin-bottom: 20px;}
.rating {height: 100px; width: 600px; max-width: 80%;}

.rating polygon:hover {
  cursor: pointer;
  transition: 500ms;
}
.rating polygon:hover {
  fill: white;
}
.rating polygon {
  fill: lightgray;
}
.rating polygon.active{
  fill: gold;
}

@media (width>600px) {
	.hotel-title {font-size: 22px; margin-top: 10px;}
	.question {margin-top: 35px; margin-bottom: 30px; font-size: 28px;}
}
@media (width>1000px) {
	.hotel-title {font-size: 28px; margin-top: 10px;}
	.question {margin-top: 35px; margin-bottom: 30px; font-size: 36px;}
}

  </style>

</head>
<body>
<img src="logo.png" class="logo"> 

<? $hotelsName=[ 
	"fontanka"=> "на Фонтанке",
	"jukovsk"=>"на Жуковского",
	"petrograd"=>"на Петроградской",
	"rybat"=>"в Рыбацком",
	"narvsk"=>"на Нарвской",
	"kosig"=>"на Косыгина",
	"zvezd"=>"на Звездной",
	"prosvet"=>"на Просвещения",
	"frunz"=>"на Фрунзенской",
	"jukova"=>"на Жукова",
	"vaska"=>"на Васильевском",
	"kupchino"=>"в Купчино",
	"dybenko"=>"на Дыбенко",
	"muzh"=>"на Мужества",
	"bogat"=>"на Богатырском",
	];

?>

<div class="uppercase hotel-title">Алекс Отель <?=$hotelsName[$_GET['hotel']]?></div>
<div class="yellow-text uppercase question">Все ли вам понравилось?</div>
<div class="rating">

</div>




  <script>
  var hotel="<?=$_GET['hotel']?>";

  class Rating {
  constructor(dom) {
    dom.innerHTML = '<svg viewBox="0 0 275 50"></svg>';
    this.svg = dom.querySelector('svg');
    for(var i = 0; i < 5; i++)
      this.svg.innerHTML += `<polygon data-value="${i+1}"
           transform="translate(${i*55},0)" 
           points="23 35 9 43 11 27 0 16 16 14 23 0 29 14 45 16 34 27 36 43">`;
    this.svg.onclick = e => this.change(e);
    this.render();
  }
  
  change(e) {
    let value = e.target.dataset.value;
    value && (this.svg.parentNode.dataset.value = value); 
    this.render();
	if(value>3) {window.location.href = "tnx.php?hotel="+hotel;}
	else {window.location.href = "sorry.php?hotel="+hotel;}
  }
  
  render() {
    this.svg.querySelectorAll('polygon').forEach(star => {
      let on = +this.svg.parentNode.dataset.value >= +star.dataset.value;
      star.classList.toggle('active', on);
    });
  }
}

document.querySelectorAll('.rating').forEach(dom => new Rating(dom));
  </script>
</body>
</html>