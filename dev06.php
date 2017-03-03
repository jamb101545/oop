<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 22:00
 */
echo "В класс Car из предыдущих заданий добавить private свойство price, 
а также публичные геттер и сеттер для него. Геттер должен зависеть от 
одного параметра. В зависимости от того, было ли в функцию геттера передано true, 
выводить отформатированную цену, либо же в обычном виде (использовать функцию number_format). 
Сеттер должен приводить входящий параметр к числу, у которого не более 2 знаков после запятой 
(использовать round)..<br>";

class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    /**
     * @return mixed
     */
    public function getPrice($param)
    {

        if ($param) {

            return number_format( $this->price, 2, ',', ' ');
        }
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {


        $this->price = round($price, 2);
    }


}
$car01 = new Car;
$car01->driver= 'alex';
$car01->year=1979;
$car01->brand = 'vaz';
$car01->model = 2101;
$car01->setPrice(126598.36981);


echo 'Car #1 price number_format: <br>';
echo 'price: ' . $car01->getPrice(true) . '<br>';

echo 'Car #1 price: <br>';
echo 'price: ' . $car01->getPrice(false) . '<br>';






