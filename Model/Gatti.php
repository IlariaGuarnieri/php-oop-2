<?php 

class Gatti extends Shop{

  public $lettiera;
  public $tiragraffi;

  public function __construct(int $prezzo ,string $_spazzole, string $_cuccie, string $_lettiera, string $_tiragraffi){

    parent:: __construct($_spazzole, $_cuccie);

    $this->lettiera = $_lettiera;
    $this->tiragraffi = $_tiragraffi;
  }
}

?>