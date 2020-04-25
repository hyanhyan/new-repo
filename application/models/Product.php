<?php


namespace application\models;


use application\components\Db;
use application\components\Validator;

class Product
{
    public $name;
    public $option;
    public $new;
    public $price;
    public $img;
    public $desc;


    public function __construct($post)
    {
        if (!empty($post['name'])) {
            $this->name = $post['name'];

        }
        if (!empty($post['sel'])) {
            $this->option = $post['sel'];
        }
        if (!empty($post['new'])) {
            $this->new = $post['new'];
        }
        if (!empty($post['price'])) {
            $this->price = $post['price'];
        }
        if (!empty($post['img'])) {
            $this->img = $post['img'];
        }
        if (!empty($post['desc'])) {
            $this->desc = $post['desc'];
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

    public function ProductIndex()
    {
        $product = Db::getConnection()->query("SELECT `products`.*, `categories`.`name`  
                                        FROM `products`
                                            LEFT JOIN `categories` ON products.category_id=categories.id");
        $product->execute();
        $arrayCat = $product->fetchAll(\PDO::FETCH_ASSOC);
        return $arrayCat;
    }


    public static function categorySelect()
    {

        $categorySelect = Db::getConnection()->query("SELECT * FROM `categories`");
        $i=0;
        $category = array();
        while($cat=$categorySelect->fetch()) {
        $category[$i]['id'] = $cat['id'];
        $category[$i]['name'] = $cat['name'];
        $i++;
        }
        return $category;
    }
    public function ProductCreate()
    {
        if ($this->validate() == []) {
            $insert_products = Db::getConnection()->prepare("INSERT INTO `products` (`prName`,`is_New`, `category_id`,`price`,`image_path`,`description`,`created_date`, `update_date`) 
                                                      VALUES ('$this->name', '$this->new','$this->option','$this->price','$this->img','$this->desc', now(), now())");
            $insert_products->execute();

            return true;
        }
        return false;
    }




}