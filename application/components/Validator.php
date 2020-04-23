<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 11.04.2020
 * Time: 18:14
 */

namespace application\components;


class Validator
{
    public $rules = [];

    public function __construct($rules)
    {
        $this->rules = $rules;
    }

    public function validate()
    {
        $rules = $this->rules;
        if (!empty($rules)) {
            $data = [];

            if (isset($rules['required'])) {
                $required = $rules['required'];
                foreach ($required as $key=>$value){
                    if ($value == '') {
                        $data[$key] = str_replace('_', ' ', $key) . ' ' . 'is required';
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }

            if (isset($rules['name'])) {
                $name = $rules['name'];
               // var_dump($name);
               // die();
                foreach ($name as $key=>$value) {
                    if ($value == '') {
                        $data[$key] = str_replace('_', ' ', $value).'message';
                    }
                }
                //var_dump($data);
               // die();
                if (!empty($data)) {
                    return $data;
                }

                foreach ($name as $key=>$value) {
                    if (strlen($value) <2 || strlen($value) > 100) {
                        $data[$key] = str_replace('_', ' ', $value).'message';
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }

            if (isset($rules['email'])) {
                $email = $rules['email'];
                foreach ($email as $key=>$value) {
                    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $value)) {
                        $data[$key] = $key.'error';
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }

            if (isset($rules['password'])) {
                $password = $rules['password'];
                foreach ($password as $key=>$value) {
                    if (strlen($value) <8 || strlen($value) > 20) {
                        $data[$key] = str_replace('_', ' ', $value).'password is too short';
                    }
                }
                if (!empty($data)) {
                    return $data;
                }
            }
        }
        return [];
    }
}