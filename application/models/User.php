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
        $user = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `email`='$email'"); // get user by email
        $user->execute();
        $user_info = $user->fetchAll(\PDO::FETCH_ASSOC);
        print_r($user_info);
        if($user_info) {
            return $user_info;
        }
        return false;
    }

    public static function forgotPassword($password)
    {
        // this method for later
    }

    public static function hashPassword($password)
    {
        return str_replace('$2y$10$', '', password_hash($password, PASSWORD_BCRYPT));
    }

    public static function findById($id)
    {
        $user = ""; // get user by id
        if($user) {
            return $user;
        }
        return false;
    }

    public static function generateAuthKey($length)
    {
            $length = 10;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;

    }
}
