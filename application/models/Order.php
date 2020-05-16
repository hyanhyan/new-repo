<?php


namespace application\models;


use application\components\Db;

class Order
{
    public $id;

    public function __construct($id)
    {
        $this->id=$id;
    }
    public function orderIndex()
    {
        $product = Db::getConnection()->query("SELECT *
                                        FROM `orders`
                                            LEFT JOIN `products` ON orders.product_id=products.id 
                                           
                                            ");

        $product->execute();
      return true;

    }
    public function orderCreate()
    {
        $insert_order = Db::getConnection()->prepare("INSERT INTO `orders` (`user_id`,`status`, `product_id`,`order_date`) 
                                                      VALUES ('1', 'NULL','$this->id',now())");
        $insert_order->execute();
        return true;

    }
}