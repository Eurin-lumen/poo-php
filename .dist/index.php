<?php
 
// D’abord, l’exemple sans chaînage :
$date = new DateTime;
$newDate = $date->modify('+1 day');
 
echo $date->format('d/m/Y').PHP_EOL;
echo $newDate->format('d/m/Y').PHP_EOL;
 
// Maintenant avec le chaînage. Nous exploitons directement
// l'objet qui nous est retourné sans le stocker dans une variable :
$formatedDate = $date->modify('+1 day')->format('d/m/Y');
echo $formatedDate.PHP_EOL;