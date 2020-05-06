<?php


namespace application\models;


use application\components\Db;
use application\components\Pagination;
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

    public function productPaginate() {
        $url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts=explode("/",$url);
        $i=end($parts);
        $sql = "SELECT count(*) FROM products";
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

        $path="/admin/product/".$i;
        $page = new Pagination($number_of_rows, $currentPage, $notes_on_page, $path);
        return $page->html();

    }

    public function productIndex($notes_on_page,$limit)
    {
        $product = Db::getConnection()->query("SELECT `products`.*, `categories`.`name`  
                                        FROM `products`
                                            LEFT JOIN `categories` ON products.category_id=categories.id LIMIT $notes_on_page, $limit");


        $product->execute();
        $arrayProduct = $product->fetchAll(\PDO::FETCH_ASSOC);
        return $arrayProduct;


    }


    public static function categorySelect()
    {

        $categorySelect = Db::getConnection()->query("SELECT * FROM `categories`");
        $i = 0;
        $category = array();
        while ($cat = $categorySelect->fetch()) {
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













