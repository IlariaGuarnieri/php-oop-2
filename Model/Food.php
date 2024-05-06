<?php 
require_once __DIR__.'/Products.php';
require_once __DIR__. '/Availability.php';

class Food extends Products{

  use Availability;

  public $ingredients;
  public $nutrition;
  public $peso;

  public function __construct(string $_name, float $_prezzo, string $_immagine, ProductCategory $_categories, string $_ingredients, string $_nutrition, string $_peso){

    parent:: __construct($_name, $_prezzo,$_immagine, $_categories);

    // if(strlen($_ingredients) < 3){
    //     throw new Exception('Gli ingredienti devono avere almeno 3 caratteri');
    // }


    $this->setIngredients($_ingredients);
    $this->nutrition = $_nutrition;
    $this->peso = $_peso;

  }

    public function setIngredients($_ingredients){
    if(empty($_ingredients) || strlen(($_ingredients) < 3)){
        throw new Exception('gli ingredienti devono avere almeno 3 caratteri');
    }
    $this->name = $_ingredients;
}

  public function getIngredients(){
    return $this->ingredients;
  }
  public function getNutrition(){
    return $this->nutrition;
  }
  public function getPeso(){
    return $this->peso;
  }


}

?>