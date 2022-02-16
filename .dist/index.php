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


