<?php

declare(strict_types=1);
// Masquer la complexité de vos objets
class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
}

$towerBridge = new Pont;
$towerBridge->longueur = 286.0;