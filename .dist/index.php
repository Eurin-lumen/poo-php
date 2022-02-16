<?php

declare(strict_types=1);
// création d'une fonction spécifique à la tache précédente 
class Pont
{
   public float $longueur;
   public float $largeur;
  
   public function getSurface(): float
   {

        return $this->longueur * $this->largeur;
   }
}
// impression du résultats

$pont = new Pont;
$pont->longueur = 286.0;
$pont->largeur = 15.0;

$surface = $pont->getSurface();

var_dump($surface);

