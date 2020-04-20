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
                foreach ($name as $key=>$value) {
                    if (!preg_match('\'/\b([A-Z]{3}\s?(\d{3}|\d{2}|d{1})\s?[A-Z])|([A-Z]\s?(\d{3}|\d{2}|\d{1})\s?[A-Z]{3})|(([A-HK-PRSVWY][A-HJ-PR-Y])\s?([0][2-9]|[1-9][0-9])\s?[A-HJ-PR-Z]{3})\b/\'', $value)) {
                        $data[$key] = str_replace('_', ' ', $value).'message';
                    }
                }
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