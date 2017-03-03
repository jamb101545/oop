<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 21:00
 */
echo "Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин 
Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры 
класса User для нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User.
 Вывести объекты класса Car на экран при помощи var_dump(), print_r().<br>";

class User{
    public $login;
    public $password;
    public $email;
    public $raiting = 0;
}
class Car {
   public $brand;
   public $model;
   public $year;
   public $driver;

}

$user1 = new  User;

$user1->login='shef';
$user1->password = '369852';
$user1->email = 'shef@do.com';
$user1->raiting = 15;

$user2 = new  User;

$user2->login='zam';
$user2->password = '65478';
$user2->email = 'zamf@do.com';
$user2->raiting = 5;

$car01 = new Car;
$car02 = new Car;


$car01->driver= $user1;
$car01->year=1979;
$car01->brand = 'vaz';
$car01->model = 2101;

$car02->driver = $user2;
$car02->year=2016;
$car02->brand = 'subaru';
$car02->model = 'forester';

var_dump($car01);
echo "<br>";

var_dump($car02);
echo "<br>";

print_r($car01);
echo "<br>";
print_r($car02);
