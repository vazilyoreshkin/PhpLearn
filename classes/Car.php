<?php

class Car
{
    public $color;
    public $whels;
    public $speed;
    public $brand;
   
//    public function __construct($color, $wheels = 4, $speed, $brand) 
//    {
//        $this->color = $color;
//        $this->wheels = $wheels;
//        $this->speed = $speed;
//        $this->brand = $brand;
//        echo __me;
//
//    }
    public function getCarInfo() {
    
        return "<h3>О моем авто:</h3>
        Марка: {$this->brand}<br>
        Цвет:{$this->color}<br>
        Кол-во колес:{$this->whels}<br>
        Скорость:{$this->speed}";
            }
}



