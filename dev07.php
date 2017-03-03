<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 23:14
 */
echo "Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.<br>";

class Car {
    public $brand = 'bmv';
    public $model = 'x5';
    public $year = 2012;
    public $driver = 'all';
    private $price = 0;

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

class WaterCar extends Car{

    public $waterSpeed;


}
$car01 = new Car;
$car01->driver= 'alex';
$car01->year=1979;
$car01->brand = 'vaz';
$car01->model = 2101;
$car01->setPrice(126598.36981);

$wCar01 = new WaterCar();

$wCar01->waterSpeed=120;


echo "<pre>";
print_r($wCar01);
echo "</pre>";