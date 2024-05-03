<?php 

class Cani extends Shop{

  public $shampoo;
  public $sacchettini;

    public function __construct(string $_spazzole, string $_cuccie, string $_shampoo, string $_sacchettini){
  
      parent:: __construct($_spazzole, $_cuccie);

      $this->shampoo = $_shampoo;
      $this->sacchettini = $_sacchettini;
    }
  }

?>