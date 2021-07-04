<?php

class Cat
{
    private $name;
    private $color;
    public $weight;
    public function __construct (string $name, string $color) 
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function sayHello()
    {
    echo 'Меня зовут ' . $this->name . ', моя шерсть цвета ' . $this->color . '<br>';
    }
    public function setName(string $name)
    {
        $this-> name = $name;
    }
    public function setColor(string $color)
    {
        $this-> color = $color;
    }
    public function  getName():string
    {
        return $this->name;
    }
    public function getColor():string
    {
        return $this->color;
    }
}
$cat1 = new Cat('Снежок', 'белый');
$cat1-> sayHello();
$cat1-> setName('Снег');
$cat1->setColor('серый');
$cat2 = new Cat ('Барсик', 'рыжий');
$cat2->sayHello();
$cat1->sayHello();