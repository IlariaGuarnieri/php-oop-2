<?php

class Shop{
  public $prezzo;
  public $name;
  public $imballaggio;
  public $materiale;
  

  public function __construct(int $_prezzo, string $_name, string $_imballaggio)
  {
    $this->prezzo = $_prezzo;
    $this->name = $_name;
    $this->imballaggio = $_imballaggio;
  }
}

?>