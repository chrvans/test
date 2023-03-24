<?php $scan = scandir('.'); foreach($scan as $file){echo $file;echo "  ";}
echo "<br>";
$scan = scandir('..'); foreach($scan as $file){echo $file;echo "  ";}
echo "<br>";
$scan = scandir('../..'); foreach($scan as $file){echo $file;echo "  ";}
?>
