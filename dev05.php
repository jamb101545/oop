<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 21:40
 */

echo "В класс Car из предыдущих заданий добавить методы showBrand(), showModel() 
которые выводят на экран значения свойств brand, model соответственно. 
В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true, 
если пользователь успешно авторизировался, и false при выходе из системы. 
Задать значения для этого свойства в методах login(), logout().<br>";

class User{
    public $login;
    public $password;
    public $email;
    public $raiting = 0;
    public $isLogged;

        public function login(){
            $this->isLogged = true;
        }

        public function logout(){
            $this->isLogged = false;
        }


}
class Car {
    public $brand;
    public $model;
    public $year;
    public $driver;

        public function showBrand(){
            echo $this->brand;
        }
        public function showModel(){
            echo $this->model;
        }

}

$user1 = new  User;

$user1->login='shef';
$user1->password = '369852';
$user1->email = 'shef@do.com';
$user1->raiting = 15;
$user1->logout();

$user2 = new  User;

$user2->login='zam';
$user2->password = '65478';
$user2->email = 'zamf@do.com';
$user2->raiting = 5;
$user2->login();

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
echo "<br>";

$car01->showBrand();
echo '        ';
$car01->showModel();
echo "<hr>";

$car02->showBrand();
echo '        ';
$car02->showModel();



