<div>
    <a href=http://mysite.local/> Mysite </a>
	<br>
	<br>
</div>


<?php
    /*$x = 7;
    if ($x < 10) echo 'x меньше 10';
    else echo 'x больше или равен 10';
    echo '<br />';
    if ($x < 7) echo 'x меньше 7';
    elseif ($x > 7) echo 'x больше 7';
    else echo 'x равен 7';
    echo '<br />';
    
    $a = 5;
    $b = 3;
    if ($a < $b || $b == 3) echo 'Истина';
    else echo 'Ложь';
    
    /* Следующие строки НЕ безопасны! Однако, на данный момент это не критично. */
    
   /* if (isset($_GET['com'])) $com = $_GET['com'];
    else $com = false;
    
    $com = isset($_GET['com'])? $_GET['com'] : false; */
	
	$age= 30;
	echo $age;
    
    $act = $_GET['act']?? false;
	
    // echo '<br />';
    if ($act == 'add')  {
        $age ++;
        echo $age;
    }
    elseif ($act == 'dec') {
        $age --;
        echo $age;
	}
	elseif ($act == 'ok') {
        echo "Возраст $age";
    }
    elseif ($act) echo 'Не пори херню!';
    
	
	for ($i = 0; $i < 10; $i++) {
    echo '<br />';
	echo "<a href = zzz$i> Link .$i</a>";
	}
?>

<div>
    <a href='?act='> X</a>
	
    <a href='1'> 1</a>
    <a href="?act=2"> 2</a>
    <a href="?act=3"> 3</a>
    <br>
    <a href="?act=4"> 4</a>
    <a href="?act=5"> 5</a>
    <a href="?act=6"> 6</a>
    <br>
    <a href="?act=7"> 7</a>
    <a href="?act=8"> 8</a>
    <a href="?act=9"> 9</a>
    <br>
    <a href="?act=0"> 0</a>
</div>