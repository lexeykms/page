<?php
	include	$_SERVER['DOCUMENT_ROOT'].'/inc/menu.php';
	// include	$_SERVER['DOCUMENT_ROOT'].'/inc/top.php';

	echo '<pre>';
	echo '$GLOBALS:';
	$arr = print_r($GLOBALS, true);
	echo $arr.'<br />';
	echo '</pre>';
?>