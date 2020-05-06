<?php


namespace application\models;


use application\components\Db;
use application\components\Pagination;
use application\components\Validator;

class Category
{
    public $name;


    public function __construct($post)
    {
        if (!empty($post['name'])) {
            $this->name = $post['name'];

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

        if ($this->validate() == []) {
            $create = Db::getConnection()->prepare("INSERT INTO `categories` (`name`, `created_date`, `update_date`)
                            VALUES ('$this->name', now(), now())");
            $create->execute();
            return true;
        }
        return false;
    }
    public function categoryPaginate() {
        $url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts=explode("/",$url);
        $i=end($parts);
        $sql = "SELECT count(*) FROM categories";
        $result = Db::getConnection()->prepare($sql);
        $result->execute();
        $number_of_rows = $result->fetchColumn();

        if(isset($i) && !empty($i)) {
            $currentPage = $i;
        }

        else{
            $currentPage = 1;
        }
        $notes_on_page=10;

        if($currentPage == 1) {
            $notes_on_page=1;
        } else{
            $limit=($currentPage-1)/$notes_on_page;
        }

        $path="/admin/category/".$i;
        $page = new Pagination($number_of_rows, $currentPage, $notes_on_page, $path);
        return $page->html();

    }

    public function categoryIndex($notes_on_page,$limit)
    {
        $sel = "SELECT * FROM categories  LIMIT  $notes_on_page, $limit";
        $arr = Db::getConnection()->prepare($sel);
        $arr->execute();
        $arrayCat = $arr->fetchAll(\PDO::FETCH_ASSOC);
        return $arrayCat;

        }



    public static function categoryUpdate($id,$name)
    {
        $updCategory = Db::getConnection()->prepare("UPDATE `categories` SET `name`='$name' WHERE `id`='$id'");
        return $updCategory->execute();

    }

}