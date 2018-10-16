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
			
			<div class="hidden_main" id="hide"><span>ГЛАВНАЯ</span></div>
			<div class="hidden_news" id="hide1" ">
				<p onmouseover="fastScroll('#under_1')">НОВОСТИ</p>
				<?php require('news.php'); ?>
					
				
			</div>
			<div class="hidden_blog" id="hide2"><span>БЛОГ</span>
				<?php  require_once('blog_right.php');
				?>
			 </div>
			<div class="hidden_about" id="hide3"><span>ОБ АВТОРЕ</span></div>
			<div class="hidden_cont" id="hide4"><span>КОНТАКТЫ</span></div>
			<div class="bottom_right">@All rights Asigned by CoolzeT<br>
			2018</div>
		</div>
		

		<div class="header" onmouseover="hideSomething('#hide', '#hide1', '#hide2', '#hide3', '#hide4'), overEffect(this)">
			<div class="login_top"></div>
			<div class="login">
				<form method="post" action="\login.php" >
					<input type="text" name="login" id="login" placeholder="Логин"><br>
					<input type="password" id="password" name="password" placeholder="Пароль"><br>
					<button >Отправить</button> 
				</form>
			</div>
			<div  id="reg"class="humb_reg"><a href="#" class="menu_button">
				<span></span></a>
			</div>
				
			<div class="text">
			Добро пожаловать в интерактивный мир CoolzeT!
			</div>
		</div>
		<div class="under_header" id="under">
				<a>Новости</a>
		</div>
		<div class="news" id="new"  onmouseover="hideSomething('#hide1','#hide', '#hide2', '#hide3', '#hide4'), overEffect(this)">
			<div class="news_text">
				<div id="id-1"></div>
				<div id="id5"></div>
				<div id="id6"></div>
				<div id="id0"></div>
				<?php require('news_middle.php') ?>
				<div id="id4"></div>
			</div>
		</div>
		<div class="under_header_1" id="under_1">
				<a>Блог</a>
		</div>
		<div class="blog" id="blog" onmouseover="hideSomething('#hide2', '#hide', '#hide1', '#hide3', '#hide4'), overEffect(this)"></div>
			<div class="blog_text">

					<div id="iblog-1"></div>
				<div id="iblog5"></div>
				<div id="iblog6"></div>
				<div id="iblog0"></div>
				<?php require('blog_middle.php') ?>
				<div id="iblog4"></div>
			</div>
		<div class="under_header_2" id="under_2">
				<a>Об Авторе</a>
		</div>
		<div class="about" id="about" onmouseover="hideSomething('#hide3', '#hide', '#hide1', '#hide2', '#hide4'), overEffect(this)"></div>

		<div class="under_header_3" id="under_3">
				<a>Контакты</a>
		</div>
		<div class="contact" id="contact"  onmouseover="hideSomething('#hide4', '#hide','#hide1', '#hide2', '#hide3'), overEffect(this)">
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="jQuery.js">
			
		</script>			


	</body>
</html>
<!--
	План работы:

		ГОТОВО

 -->