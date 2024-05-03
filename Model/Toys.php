<?php 
require_once __DIR__. '/Products.php';

class Toys extends Products{

  public $material;
  public $dimensions;

  public function __construct(string $_name, float $_prezzo, string $_immagine, string $_categories, string $material, string $dimensions){
    parent:: __construct($_name, $_prezzo,$_immagine, $_categories);
  }
}
?>