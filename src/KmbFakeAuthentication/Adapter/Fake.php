<?php
namespace KmbFakeAuthentication\Adapter;

use KmbDomain\Model\User;
use KmbDomain\Model\UserInterface;
use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;

class Fake implements AdapterInterface
{
    public static $resultCode = Result::SUCCESS;
    public static $login = 'jdoe';
    public static $name = 'John DOE';
    public static $email = 'jdoe@gmail.com';
    public static $role = UserInterface::ROLE_ROOT;

    /**
     * Performs an authentication attempt
     *
     * @return \Zend\Authentication\Result
     * @throws \Zend\Authentication\Adapter\Exception\ExceptionInterface If authentication cannot be performed
     */
    public function authenticate()
    {
        return new Result(static::$resultCode, new User(static::$login, static::$name, static::$email, static::$role));
    }
}
