<?php
 $numberA = rand(-20,20);
 $numberD = rand(-20,20);
 $numberC = rand(-20,20);
 $itog = ((($numberC/$numberD)+(3*$numberA/2))/($numberC - $numberA + 1));
 print ('Число А, равное ' . $numberA . '<br> число D, равное ' . $numberD . ' <br> число С, равное ' . $numberC . '<br><br>');
 echo ('При помощи полученных данных вычислим следующее выражение:' . '<br>');
 print (' (' . $numberC . ') / (' . $numberD  . ') + ' . '3 * (' . $numberA  . ') / 2' . '<br>');
 echo ('—————————' . ' = ' . $itog . '<br>');
 print ('(' . $numberC . ') - (' . $numberA . ') + 1' . '<br>');
?>
<html>

</html>	
