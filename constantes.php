<?php

declare(strict_types=1);

class Pont
{
   private const UNITE = 'm²';
   private float $longueur;
   private float $largeur;
  
   public function getSurface(): string
   {
       return ($this->longueur * $this->largeur) . self::UNITE;
   }
  // setLongueur et setLargeur ne changent pas
}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLargeur(15.0);

echo $towerBridge->getSurface();