<?php
//declare(strict_types=1);
//Ajout de proprieté
class Pont
{
   public float $longueur = 0;
}

$pont = new Pont;
$pont->longueur = 263.0;

var_dump($pont);