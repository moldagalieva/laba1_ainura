<?php
	$z=0;
	for ($i=1; $i<=10; $i++) { 
		echo ("<tr>"); 
			for ($k=1; $k<=10; $k++) 
				{ 
				echo ("<td align=center>"); 
				$p=$z+$k; 
					if ($p%2 == 0) 
						{
							echo '<p style=color:Red;>' . $p . '</p>';
						} 
					else 
			                                   {
							echo $p;
						}
				echo ("</td>"); 
			}
		echo ("</tr>"); 
	$z=($z+10);
}
?>
<html>
<head>
	<nav>
	<p><a href="index.php">Главное меню</a></p> 
	</nav>
</head>
</html>	
