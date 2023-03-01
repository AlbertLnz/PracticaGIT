<?php

  class Auto{
    public $placa;
    public $color;
    public $model;

    function __construct($placa, $color, $model){ //no es pot crear més d'1 constructor?
      $this->placa = $placa;
      $this->color = $color;
      $this->model = $model;
    }

    //GETTER'S
    public function getPlaca($placa){ //pot ser o no public
      return $this->placa;
    }
    public function getColor($color){
      return $this->color;
    }
    public function getModel($model){
      return $this->model;
    }

    //SETTER'S
    public function setPlaca($placa){
      $this->placa = $placa;
    }
    public function setColor($color){
      $this->coloro = $color;
    }
    public function setModel($model){
      $this->model = $model;
    }
  }
?>