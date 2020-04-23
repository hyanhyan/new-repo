<?php


namespace application\models;


use application\components\Db;
use application\components\Validator;

class Category
{
    public $name;

    public function __construct($post)
    {
        if (!empty($post['name'])) {
            $this->name = $post['name'];
            //var_dump($this->name);
        }
    }

    protected function rules()
    {
        return [
            'required' => [
                'name' => $this->name
            ],
            'name' => [
                'name' => $this->name,
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

    public function categoryCreate()
    {
      //  var_dump($this->validate());
       // die();
        if ($this->validate() == []) {
            $create = Db::getConnection()->prepare("INSERT INTO `categories` (`name`, `created_date`, `update_date`)
                            VALUES ('$this->name', now(), now())");
            $create->execute();
            return true;
        }
        return false;
    }

    public function categoryIndex()
    {
        $cat = Db::getConnection()->prepare("SELECT * FROM `categories`");
        $cat->execute();
        $arr = $cat->fetchAll(\PDO::FETCH_ASSOC);
        return $arr;
    }

    public static function categoryUpdate($id,$name)
    {
        $updCategory = Db::getConnection()->prepare("UPDATE `categories` SET `name`='$name' WHERE `id`='$id'");
       // var_dump($updCategory->execute());
        //die();
        return $updCategory->execute();

    }

}