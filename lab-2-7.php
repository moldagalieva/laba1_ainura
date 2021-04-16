<?php
$a=rand(-5,0);
$b=rand(0,5);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
do {
echo($a . "<br>");
$a=++$a; }
while ($a<=$b);
?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	
