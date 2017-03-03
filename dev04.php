<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 21:20
 */

echo "Создать массив, который описывает сообщение ключами name, email,
 message с соответствующими значениями. Привести массив к объекту. 
 Проанализировать результат при помощи var_dump..<br>";

    $arr = [
        'name'=>'alex',
        'email'=>'df@gh.com',
        'message'=>'lorem ipsum',
    ];


    $newObj = (object)$arr;

    echo "<pre>";
    print_r($newObj);
    echo "</pre>";

    var_dump($newObj);