<?php
if (isset($_REQUEST['znak1']))
	{
	$text = "Вы выбрали значения a=0; b=0";
	$а = 0;
	$b = 0;
	}
else if (isset($_REQUEST['znak2']))
	{
	$text = "Вы выбрали значения a=10; b = ''true''";
	$а = 10;
	$b = "true";
	}
else if (isset($_REQUEST['znak3']))
	{
	$text = "Вы выбрали значения a=false; b = ''false''";
	$а = false;
	$b = "false";
	}
else if (isset($_REQUEST['znak4']))
	{
	$text = "Вы выбрали значения a=-1; b = '' ''";
	$а = -1;
	$b = "";
	}
?>
 
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	
