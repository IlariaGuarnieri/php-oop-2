<?php 
require_once __DIR__. '/Products.php';

class Toys extends Products{

  public $material;
  public $dimensions;

  public function __construct(string $_name, float $_prezzo, string $_immagine, ProductCategory $_categories, string $_material, string $_dimensions){

    parent:: __construct($_name, $_prezzo,$_immagine, $_categories);

    $this->material = $_material;
    $this->dimensions = $_dimensions;
  }
  public function getMaterial(){
    return $this->material;
  }
  public function getDimensions(){
    return $this->dimensions;
  }
}
?>