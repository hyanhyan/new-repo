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
        $this->name=$post['name'];
        $this->option=$post['select'];
        $this->new=$post['new'];
        $this->price=$post['price'];
        $this->img=$post['img'];
        $this->desc=$post['desc'];
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

    public function validate(){
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())){
            return $validator->validate();
        }
        return [];
    }
    public function ProductIndex() {
        $products = Db::getConnection()->prepare("SELECT `products`.*, `categories`.`name`,
                                        FROM `products`
                                            LEFT JOIN `categories` ON products.category_id=categories.id");
        $products->execute();
        $arr = $products->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }
    public function ProductCreate(){
$insert_products = Db::getConnection()->prepare("INSERT INTO `products` (`prName`,`category_id`,`is_New`, `price`,`image_path`,`description`,`created_date`, `update_date`) 
                                                      VALUES ('$this->name', '$this->option,'$this->new','$this->price','$this->img','$this->desc', now(), now())");
$insert_products->execute();
        $ins = $insert_products->fetchAll(PDO::FETCH_ASSOC);
        return $ins;
    }
}