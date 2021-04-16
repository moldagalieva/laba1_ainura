<?php
if (isset($_REQUEST['per1']))
	{
	$text2 = "Переменная а равна А";
	$e = "A";
	}
else if (isset($_REQUEST['per2']))
{
	$text2 = "Переменная а равна B";
	$e = "B";
	}
else if (isset($_REQUEST['per3']))
	{
	$text2 = "Переменная а равна C";
	$e = "C";
	}?>
	<?php
switch ($e) {
	
case 'A' :
 echo 'Переменная имеет значение "А"'; break;
case 'B':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден' ;
}
?>
<p> Без break: <br>
<?php switch ($e) {
case 'А' :
 echo 'Переменная имеет значение "А"';
case 'В':
 echo 'Переменная имеет значение "В"'; break;
default:
 echo 'Ответ не найден' ;
}
?>
<form>
<input type="text" size="40" value="<?php echo $text2; ?>" disabled>
<input type="submit" name="per1" value="a = A" />
<input type="submit" name="per2" value="a = B" />
<input type="submit" name="per3" value="a = C" />
</form>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	
