<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:25
 */

namespace application\components;

use application\models\User;

class Auth
{
    public static function isGuest()
    {
        if (empty($_SESSION['user'])) {
            return true;
        }

        return false;
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            if (isset($_COOKIE['cookie_key'])) {
                $key = $_COOKIE['cookie_key'];
                $select = Db::getConnection()->query("SELECT * FROM `users` WHERE `cookie_key` = '$key'")->fetchAll(\PDO::FETCH_ASSOC);
                if ($select) {
                    $cookie_rand_key = User::generateAuthKey(10);
                        Db::getConnection()->query("UPDATE `users` SET `cookie_key` = '$cookie_rand_key' WHERE `cookie_key` = '$key'");
                    return true;
                }

            }
            return false;
        }
    }


    public static function isAdmin()
    {
        if ($_SESSION['users']['role'] === 'admin') {
            return true;
        }

        return false;
    }
    public static function setSession($id, $role = '')
    {
        $_SESSION['user']['id'] = $id;
        $_SESSION['user']['role'] = $role;
    }
    public static function setCookie($user_name, $cookie_key)
    {
        setcookie('name', $user_name, time() + (60 * 60 * 24), '/');
        setcookie('cookie_key', $cookie_key, time() + (60 * 60 * 24), '/');
    }

    public static function logout()
    {
        if ($_COOKIE['cookie_key']){
            setcookie('name', '', time() - (60 * 60 * 24), '/');
            setcookie('cookie_key', '', time() - (60 * 60 * 24), '/');
            Db::getConnection()->query("UPDATE `users` SET `cookie_key` = NULL'");
        }
        session_unset();
        session_destroy();
        header("Location: /"); // redirect to home page
        die;
    }

    public static function redirect($url)
    {
        header("Location: ".$url);
    }

}
