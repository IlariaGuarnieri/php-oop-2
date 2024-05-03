<?php 
require_once __DIR__.'/Products.php';

class Food extends Products{

  public $ingredients;
  public $nutrition;

  public function __construct(string $_name, float $_prezzo, string $_immagine, string $_categories, string $_ingredients, string $_nutrition){

    parent:: __construct($_name, $_prezzo,$_immagine, $_categories);

    $this->ingredients = $_ingredients;
    $this->nutrition = $_nutrition;

  }
  public function getIngredients(){
    return $this->ingredients;
  }
  public function getNutrition(){
    return $this->nutrition;
  }
}

?>