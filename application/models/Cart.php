<?php



namespace application\models;


use application\components\Auth;
use application\components\Db;

class Cart
{
    public $id;
    public $quantity;

    public function __construct($id, $quantity)
    {
        $this->id = $id;
        $this->quantity = $quantity;

    }

    public function addToCart()
    {
        $result = Db::getConnection()->query("SELECT * FROM products WHERE id='$this->id'");

        $i = 0;
        $arr = array();
        while ($array=$result->fetch()) {

            $arr[$i]['id'] = $array['id'];
            $arr[$i]['name'] = $array['prName'];
            $arr[$i]['price'] = $array['price'];
            $arr[$i]['image'] = $array['image_path'];
            $arr[$i]['quantity'] = $this->quantity;
            $i++;


        }
        if (!empty($_SESSION["cart_item"])) {
            foreach ($arr as $i => $q) {
                if (in_array($q['id'], array_keys($_SESSION["cart_item"]))) {
                    foreach ($_SESSION["cart_item"] as $k => $v) {

                        if ($q['id'] == $k) {
                            if (empty($_SESSION["cart_item"][$k]['quantity'])) {
                                $_SESSION["cart_item"][$k]['quantity'] = 0;
                            }
                            $_SESSION["cart_item"][$k]['quantity'] += $this->quantity;
                        }

                    }
                } else {

                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $arr);



                }
            }
        }else {
            $_SESSION["cart_item"] = $arr;

        }


        return $_SESSION["cart_item"];

    }
}



