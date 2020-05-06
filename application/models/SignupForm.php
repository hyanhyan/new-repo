<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:32
 */

namespace application\models;

use application\components\Db;
use application\components\Validator;


class SignupForm
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $confirm_password;

    public function __construct($post)
    {

        $this->first_name = $post['first_name'];
        $this->last_name = $post['last_name'];
        $this->email = $post['email'];
        $this->password = $post['password'];
        $this->confirm_password = $post['confirm_password'];

    }

    public function rules()
    {
        return [
            'required' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'password' => $this->password,
                'confirm_password' => $this->confirm_password,
            ],
            'name' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
            ],
            'email' => [
                'email' => $this->email,
            ],
            'password' => [
                'password' => $this->password,
                'confirm_password' => $this->confirm_password,
            ]
        ];
    }

    public function validate()
    {
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())) {
            return $validator->validate();
        }
        if ($this->password != $this->confirm_password) {
            return ['password' => 'password is incorrect'];
        }
        return [];
    }


    public function register()
    {


        $password = User::hashPassword($this->password);
        $insert = Db::getConnection()->prepare("INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `cookie_key`)
                        VALUES ('$this->first_name', '$this->last_name', '$this->email', '$password', NULL)");
        $insert->execute();


        return true;



    }


}