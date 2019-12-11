<?php
	include	$_SERVER['DOCUMENT_ROOT'].'/inc/menu.php';
	// include	$_SERVER['DOCUMENT_ROOT'].'/inc/top.php';
	include $_SERVER['DOCUMENT_ROOT'].'/lib/func.php';
	
	$Ftext= false;
	$Fpost= false;
	if (isset($_POST['testform'])) 
	{
		$Ftext= $_POST['Ftext']?? false;
		$Fpost= $_POST['Fpost']?? false;
	}
	
?>

<form name= "testform" action="<?= $_SERVER["PHP_SELF"]?>" method= "post">
	<!--
	<style>
		body {
		background: #c7b39b /*url(/img/bg.jpg)*/; /* Цвет фона и путь к файлу */
		color: #000; /* Цвет текста */
		}
	</style>
	-->
	<p><strong>Тестовая форма</strong></p>
	<div>
		<p>Текст  <input type= "text" name= "Ftext" value= "Ftext" autofocus></p> <!--value= <?="$Ftext"?> placeholder= "Текстовое поле"-->
	</div>
	<div>
		Ввод даты <input type= "date" name= "Fcalendar" value= "$today">
	</div>


	


	<div>
		<p><input type= "checkbox" name= "Fpost" value= "Fpost" checked>Show $_POST</p>
	</div>
	<div>
		<p>
		<button type="reset">Очистить</button>
		<input type= "submit" name= "testform" value= "Отправить"> 
		</p>
	</div>
</form>

<?php
	if ($Fpost)ShowArray($_POST);
?>