<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 13.04.2020
 * Time: 1:57
 */

namespace application\components;


class Message
{
    public static function set_message($message)
    {
        $_SESSION['message'] = $message;
    }

    public static function get_message()
    {
        return isset($_SESSION['message']) ? $_SESSION['message'] : '';
    }
}