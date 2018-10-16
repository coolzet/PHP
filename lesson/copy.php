<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<title>The Blog of CoolzeT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Mogra|Rasa" rel="stylesheet">
		<link  rel="icon" href="http://icons.iconarchive.com/icons/papirus-team/papirus-devices/96/input-keyboard-icon.png">
		<script type="text/javascript" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

		<div class="leftcol">
			<p id="menu_left">МЕНЮ</p>
			<span id="1_left" onclick="slowScroll('.header', '#hide', '#hide1', '#hide2', '#hide3', '#hide4')" >Главная</span>
			<span id="2_left" onclick="slowScroll('#under', '#hide1','#hide', '#hide2', '#hide3', '#hide4')">Новости</span>
			<span id="3_left" onclick="slowScroll('#under_1', '#hide2', '#hide', '#hide1', '#hide3', '#hide4')">Блог</span>
			<span id="4_left" onclick="slowScroll('#under_2', '#hide3', '#hide', '#hide1', '#hide2', '#hide4')">Об Авторе</span>
			<span id="5_left" onclick="slowScroll('#under_3', '#hide4', '#hide','#hide1', '#hide2', '#hide3')">Контакты</span>
			<div class="bottom_left">Powered by<br> CSS HTML jQuery PHP</div>
		</div>

		<div class="rightcol">
			<div class="hidden_news" id="hide1">
				<p>НОВОСТИ</p>
					
				
			</div>
			<div class="hidden_main" id="hide"><span>ГЛАВНАЯ</span></div>
			<div class="hidden_blog" id="hide2"><span>БЛОГ</span></div>
			<div class="hidden_about" id="hide3"><span>ОБ АВТОРЕ</span></div>
			<div class="hidden_cont" id="hide4"><span>КОНТАКТЫ</span></div>
			<div class="bottom_right">@All rights Asigned by CoolzeT<br>
			2018</div>
		</div>
		

		<div class="header" onmouseover="hideSomething('#hide', '#hide1', '#hide2', '#hide3', '#hide4')">
				
			<div class="text">
			Добро пожаловать в интерактивный мир CoolzeT!
			</div>
		</div>
		<div class="under_header" id="under">
				<a>Новости</a>
		</div>
		<div class="news" id="new" onmouseover="hideSomething('#hide1','#hide', '#hide2', '#hide3', '#hide4')" >
			<div class="news_text">
				
			</div>
		</div>

		<div class="under_header_1" id="under_1">
				<a>Блог</a>
		</div>
		<div class="blog" id="blog" onmouseover="hideSomething('#hide2', '#hide', '#hide1', '#hide3', '#hide4')"></div>

		<div class="under_header_2" id="under_2">
				<a>Об Авторе</a>
		</div>
		<div class="about" id="about" onmouseover="hideSomething('#hide3', '#hide', '#hide1', '#hide2', '#hide4')"></div>

		<div class="under_header_3" id="under_3">
				<a>Контакты</a>
		</div>
		<div class="contact" id="contact" onmouseover="hideSomething('#hide4', '#hide','#hide1', '#hide2', '#hide3')">
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="jQuery.js">
		</script>			


	</body>
</html>