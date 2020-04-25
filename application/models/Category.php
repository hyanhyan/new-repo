<?php


namespace application\models;


use application\components\Db;
use application\components\Pagination;
use application\components\Validator;

class Category
{
    public $name;
    private $params;

    public function __construct($post)
    {
        if (!empty($post['name'])) {
            $this->name = $post['name'];
            //var_dump($this->name);
        }
        $this->params=$post;
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

        $sql = "SELECT count(*) FROM categories";
        $result = Db::getConnection()->prepare($sql);
       $result->execute();
       $number_of_rows = $result->fetchColumn();
       //var_dump($number_of_rows);
        if(isset($this->params) && !empty($this->params)) {
            $currentPage = $this->params;
        }

        else{
            $currentPage = 1;
        }
        $limit=4;

        if($currentPage == 1) {
            $notes_on_page=1;
        } else{
            $notes_on_page=($currentPage-1)*$limit;
        }
       //var_dump($notes_on_page);
        var_dump($this->params);
        $page = new Pagination($number_of_rows, $currentPage, $notes_on_page, '/admin/category/',$this->params);
        $page->html();


        //var_dump($obj);
        //die();
        $sel = "SELECT * FROM categories LIMIT  $notes_on_page, $limit";
        $arr=Db::getConnection()->prepare($sel);
        $arr->execute();

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