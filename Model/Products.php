<?php 
require_once __DIR__. '/ProductCategory.php';

class Products{
  public $name;
  public $prezzo;
  public $immagine;
  public $categories;

  public function __construct(string $_name, float $_prezzo, string $_immagine, ProductCategory $_categories)
  {
    $this->name = $_name;
    $this->prezzo = $_prezzo;
    $this->immagine = $_immagine;
    $this->categories = $_categories;
  }

  // funzioni

  public function getName(){
    return $this->name;
  }
  public function getPrezzo(){
    return $this->prezzo;
  }
  public function getImg(){
    return $this->immagine;
  }
  // public function getCategories(){
  //   return $this->categories;
  // }
  
}

?>