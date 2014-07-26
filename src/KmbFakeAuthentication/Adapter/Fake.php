<?php
namespace KmbFakeAuthentication\Adapter;

use KmbDomain\Model\User;
use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;

class Fake implements AdapterInterface
{
    public static $resultCode = Result::SUCCESS;
    public static $login = 'goten4';
    public static $name = 'Emmanuel BOUTON';
    public static $email = 'goten4@gmail.com';
    public static $role = 'root';

    /**
     * Performs an authentication attempt
     *
     * @return \Zend\Authentication\Result
     * @throws \Zend\Authentication\Adapter\Exception\ExceptionInterface If authentication cannot be performed
     */
    public function authenticate()
    {
        return new Result(static::$resultCode, new User(static::$login, static::$name, static::$email, [static::$role]));
    }
}
