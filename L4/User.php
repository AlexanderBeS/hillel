<?php

class User
{
    protected static $table = 'users';

    public static function getUser()
    {
        return [
          'user' => [
            'name' => 'Vasya',
            'email' => 'v@mail.com'
              ],
            'table' => self::$table, //раннее статическое связывание
            'table1' => static::$table //позднее статическое связывание
        ];
    }
/*
    public static function init()
    {
        $user = self::getUser(); //раннее статическое связывание
        $table = self::$table;  //раннее статическое связывание
    }
*/
}

class Admin extends User
{
    protected static $table = 'admin_users';
}
/*
$user = User::getUser();
var_dump($user);
*/

$admin = Admin::getUser();
var_dump($admin);

