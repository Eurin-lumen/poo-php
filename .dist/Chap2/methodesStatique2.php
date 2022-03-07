<?php

declare(strict_types=1);

class Pont
{
   public static function validerTaille(float $taille): bool
   {
       if ($taille < 50.0) {
           trigger_error(
               'La taille est trop courte. (min 50m)',
               E_USER_ERROR
           );
       }
      
       return true;
   }
  
   public function setLongueur(float $longueur): void
   {
       self::validerTaille($longueur);
      
       $this->longueur = $longueur;
   }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(20.0);