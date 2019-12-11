<?php
	include	$_SERVER['DOCUMENT_ROOT'].'/inc/menu.php';
	// include	$_SERVER['DOCUMENT_ROOT'].'/inc/top.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Главная</title>
		<style>
			a {
				color: blue; /* Цвет текста */
				background: #F9F2E3; /* Цвет фона */
				padding: 2px; /* Поля вокруг текста */
			}
			body {
				background-color: #F9F2E3;
			}
			h1 {
				background-color: rgb(214,86,43);
				color: rgba(255,255,255,.9);
				padding: 10px;
			} 
			p {
				color: green;
			}
			div	{
				background-color: hsl(60,100%,25%);
				color: hsla(120,100%,50%,0.1);
			}
		</style>
	</head> 
	<body

		link= "red";/*link — определяет цвет ссылок на веб-странице (цвет по умолчанию синий, #0000FF)*/
		vlink= "red";/*alink — цвет активной ссылки. Цвет ссылки меняется при нажатии на ней кнопки мыши. Цвет по умолчанию красный, #FF0000.*/
		alink= "red";/*vlink — цвет уже посещенных ссылок. Цвет по умолчанию фиолетовый, #800080.*/
>
		<h1>Предупреждение</h1>
		<p>Все перечисленные на сайте методы ловли льва являются теоретическими и базируются на вычислительных методах. Авторы не гарантируют вашей    безопасности при их использовании и снимают с себя всякую ответственность за результат. Помните, лев это хищник и опасное животное!</p>
		<div>Арррргх!</div> 
		
		<h1>Структура:</h1>
		<ul>
			<li><a href='./index.php'>Главная</a>
				<ul>
					<li><a href='./form.php'>Форма</a>
					<li><a href='./debug.php'>Отладка</a></li>
					<li><a href=''></a></li>
					<li><a href=''></a></li>
					<li><a href=''></a></li>
				</ul>
			</li>
			
		</ul>
		
	</body>
</html>

<?php
	for ($i = 0; $i < 10; $i++) :
		echo "<br /><a href = ?lnk=lnk{$i}> Link {$i}</a>";
	endfor;
	echo '<br>';
	// $lnk = '';
	// $com = isset($_GET['com'])? $_GET['com'] : false;
	$lnk = $_GET['lnk']?? false;
	echo '<br>'.$lnk;
?>