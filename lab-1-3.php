<?php 
$num_E = 2.71828;
$num_E1 = 2.71828;
$num_E2 = 2.71828;
$num_E3 = 2.71828;
echo 'Число е равно ' . $num_E . '<br>';
print ('$num_E = ' . $num_E . ' - ' . gettype($num_E) . '<br>');
settype($num_E1, "boolean");
print ('$num_E = ' . $num_E1 . ' - ' . gettype($num_E1) . '<br>');
settype($num_E2, "string");
print ('$num_E = ' . $num_E2 . ' - ' . gettype($num_E2) . '<br>');
settype($num_E3, "integer");
print ('$num_E = ' . $num_E3 . ' - ' . gettype($num_E3) . '<br>');
?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	
