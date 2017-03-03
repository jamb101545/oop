<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 001 01.03.17
 * Time: 23:21
 */
echo "Изменить область видимости свойств класса User на protected. Унаследовать от класса 
User классы Manager, Admin. Создать объекты менеджера и админа, задать значения для свойств объектов.<br>";

class User{
    protected $login;
    protected $password;
    protected $email;
    protected $raiting = 0;
}


class Manager extends User{
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

class Admin extends User{
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

$admin = new Admin();
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


$manager = new Manager();
$manager->setLogin('pupkin')
    ->setEmail('dertf@com.com')
    ->setPassword('159')
    ->setRaiting(2);

echo 'Manager: <br>';
echo 'login: ' . $manager->getLogin() . '<br>';
echo 'email: ' . $manager->getEmail() . '<br>';
echo 'pass: ' . $manager->getPassword() . '<br>';
echo 'raiting: ' . $manager->getRaiting() . '<br>';