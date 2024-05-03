<?php

class Shop{
  public $spazzole;
  public $cuccie;
  public $ciotole;
  public $toelettatura;

  public function __construct(string $_spazzole, string $_cuccie)
  {
    $this->spazzole = $_spazzole;
    $this->cuccie =$_cuccie;
  }
}

?>