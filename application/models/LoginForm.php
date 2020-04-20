<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:32
 */

namespace application\models;

use application\components\Auth;
use application\components\Db;
use application\components\Validator;

class LoginForm
{
    public $email;
    public $password;
    public $rememberMe;

    public function __construct($post)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];

        if (!empty($post['rememberMe'])){
            $this->rememberMe = $post['rememberMe'];
        }
    }

    public function rules()
    {
        return [
            'required' => [

                'email' => $this->email,
                'password' => $this->password,

            ],

            'email' => [
                'email' => $this->email,
            ],
            'password' => [
                'password' => $this->password,

            ]
        ];
    }


    public function validate()
    {
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())) {
            return $validator->validate();
        }

        return [];
    }



    public function login()
    {
        if ($this->getUser()) {
            $user = $this->getUser();
            $cookie_rand_key = User::generateAuthKey();
            $email = $user[0]['email'];
            if($this->rememberMe) {
                Db::getConnection()->query("UPDATE `users` SET `cookie_key`='$cookie_rand_key' WHERE `email`='$email'");
                Auth::setCookie($user[0]['first_name'], $cookie_rand_key);
            }
            return true;
        }
        return false;
    }

    public function getUser()
    {
        $user = User::findByEmail($this->email);
        $pass = password_verify($this->password, '$2y$10$'.$user[0]['password']);
        if ($pass) {
            return $user;
        }
        return false;
    }
}