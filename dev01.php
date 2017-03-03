<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 20:54
 */
echo "Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.<br>";

class User{
    public $login;
    public $password;
    public $email;
    public $raiting = 0;
}

var_dump(new User);


