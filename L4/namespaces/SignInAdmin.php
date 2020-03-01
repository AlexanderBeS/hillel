<?php

namespace Admin;
use Core\User;

require __DIR__ . '/User.php';

class SignInAdmin
{
    public function __construct()
    {
        //$user = new User(); // загрузка из текущего namespace, класс Admin/User (а такого нет), если не исп. use

    }
}