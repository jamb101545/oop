<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 21:14
 */

echo "Для класса User из предыдущего занятия создать методы login(), logout(), которые 
просто выводят на экран соответствующее сообщение. Создать экземпляр класса, 
вызвать созданные методы..<br>";

class User{
    public $login;
    public $password;
    public $email;
    public $raiting = 0;


    /**
     * @return mixed
     */
    public function login()
    {
       echo "LOGIN <br>";
    }
    public function logout()
    {
        echo "LOGOUT <br>";
    }

}

$user1 = new User();

$user1->login();

$user1->logout();