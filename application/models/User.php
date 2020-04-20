<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:28
 */

namespace application\models;

use application\components\Db;

class User
{
    public static function findByEmail($email)
    {
        $user = ""; // get user by email
        if($user) {
            return $user;
        }
        return false;
    }

    public static function forgotPassword($password)
    {
        // this method for later
    }

    public static function hashPassword($password)
    {
        $password = 123456;
        return md5($password); // for example
    }

    public static function findById($id)
    {
        $user = ""; // get user by id
        if($user) {
            return $user;
        }
        return false;
    }

    public static function generateAuthKey($length = 10)
    {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;

    }
}
