<form action="dev10.php" method="post">
    Имя * <input type="text"  name="name" /> <br>
    email <input type="text"  name="email"/><br>
    Comment <textarea  type="textarea"  name="comment"></textarea><br>

    <input type="submit"/>
</form>


<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 002 02.03.17
 * Time: 10:52
 */
echo 'В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение 
Car created при создании нового экземпляра класса. Создать контактную форму. Создать скрипт 
обработчик контактной формы. Создать класс ContactForm со свойствами, значения которых совпадают 
с названиями полей формы. Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.<br>';

class Car {
    public $brand = 'bmv';
    public $model = 'x5';
    public $year = 2012;
    public $driver = 'all';
    public $price = 0;

    /**
     * @return mixed
     *
     *
     */


    public function __construct()
    {
        echo "Car created <br>";
    }


}
$car01 = new Car();
echo "<hr>";


class ContactForm {

    public $name;
    public $email;
    public $comment;

}

if (isset ($_POST['name'])) {


    $contact1= new ContactForm();

    $contact1->name = $_POST['name'];
    $contact1->email = $_POST['email'];
    $contact1->comment = $_POST['comment'];



    echo "<pre>";
    print_r($contact1);
    echo "</pre>";

}






