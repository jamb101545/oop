<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 23:43
 */

echo "Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.<br>";

class Some
{
    public static $st;
    public $var;

    public function __construct()
    {
        Some::$st = Some::$st+1;
    }



}

$one = new Some();
$one->var='firs';


$two = new Some();
$two->var='second';

$three = new Some();
$three->var='three';




echo "<pre>";
print_r($one);
echo "</pre>";

echo "<pre>";
print_r($two);
echo "</pre>";

echo "<pre>";
print_r($three);
echo "</pre>";


echo Some::$st;