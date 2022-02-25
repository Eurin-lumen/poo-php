<?php
/**
 * Dès que l’on verrouille des accès, on rentre dans le principe de l'encapsulation. 
 * On encapsule, on enferme les données dans l’objet et on va devoir 
 * créer une méthode publique, qu’on appellera  setLongueur, pour les modifier
 */

declare(strict_types=1);

class Pont
{
   private string $unite = 'm²';
  
   private float $longueur;
   private float $largeur;
  
   public function setLongueur(float $longueur): void
   {
       if ($longueur < 0) {
           trigger_error(
               'La longueur est trop courte. (min 1)',
               E_USER_ERROR
           );
       }
      
       $this->longueur = $longueur;
   }
}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLongueur(-286.0);