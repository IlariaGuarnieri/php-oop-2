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
  // public function setPrice(){
  //   if(!is_numeric ($prezzo)){
  //     throw new Exception('il prezzo deve essere un numero');
  //   }
  //   $this-> prezzo = $_prezzo;
  // }

//   public function setName($_name){
//     if(empty($_name) || strlen(($_name) < 3)){
//         throw new Exception('Il nome deve avere almeno 3 caratteri');
//     }
//     $this->name = $_name;
// }
  
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