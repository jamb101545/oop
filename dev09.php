<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 23:21
 */
echo "Создать экземпляр класса User с конкретными значениями свойств и клонировать его в 
новую переменную. Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса..<br>";

class User{
    private $login;
    private $password;
    private $email;
    private $raiting = 0;

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;

    }

    /**
     * @return int
     */
    public function getRaiting()
    {
        return $this->raiting;
    }

    /**
     * @param int $raiting
     */
    public function setRaiting($raiting)
    {
        $this->raiting = $raiting;
        return $this;

    }


}



$admin = new User();
$admin->setLogin('alex')
    ->setEmail('df@com.co')
    ->setPassword('123')
    ->setRaiting(10);
echo 'Admin: <br>';
echo 'login: ' . $admin->getLogin() . '<br>';
echo 'email: ' . $admin->getEmail() . '<br>';
echo 'pass: ' . $admin->getPassword() . '<br>';
echo 'raiting: ' . $admin->getRaiting() . '<br>';

echo '<hr>';




$manager = clone $admin;
$manager->setLogin('pupkin')
    ->setEmail('dertf@com.com')
    ->setPassword('159')
    ->setRaiting(2);

echo 'Manager clone Admin: <br>';
echo 'login: ' . $manager->getLogin() . '<br>';
echo 'email: ' . $manager->getEmail() . '<br>';
echo 'pass: ' . $manager->getPassword() . '<br>';
echo 'raiting: ' . $manager->getRaiting() . '<br>';