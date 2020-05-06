<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:27
 */

namespace application\controllers;

use application\base\BaseController;
use application\components\Auth;
use application\components\Db;
use application\models\Cart;

class SiteController extends BaseController
{
    public function actionIndex()
    {
        $this->view->setTitle('home');
        $this->view->render('site/index', []);

        return true;
    }

    public function actionContact()
    {
        $this->view->setTitle('contact');
        $this->view->render('site/contact', []);

        return true;
    }

    public function actionError()
    {
        $this->view->setLayout('error');
        $this->view->setTitle('error');
        $this->view->render('site/error', []);

        return true;
    }
    public function actionProducts()
    {
        $this->view->setTitle('products');
        $this->view->render('site/products', []);

        return true;
    }
    public function actionFilter()
    {
        $this->view->setTitle('filter');
        $this->view->render('site/filter', []);

        return true;
    }
    public function actionAbout()
    {
        $this->view->setTitle('about');
        $this->view->render('site/about', []);

        return true;
    }


    public function actionCart()
    {

        $id = isset($_GET['pid']) ? $_GET['pid'] : "";
        $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
        $cart=new Cart($id,$quantity);
        $arr=$cart->addToCart();
           $this->view->setTitle('cart');
           $this->view->render('site/cart', $arr);


        return true;
    }

public function actiondeleteCart()
{
    if(!empty($_SESSION["cart_item"])) {
        foreach($_SESSION["cart_item"] as $k => $v) {
            if($_GET["id"] == $k)
                unset($_SESSION["cart_item"][$k]);
            if(empty($_SESSION["cart_item"]))
                unset($_SESSION["cart_item"]);
        }
    }
}
    public function actionOrder()
    {
        $this->view->setTitle('order');
        $this->view->render('site/order',[]);
        return true;
    }

    public function actionLogout()
    {
        Auth::redirect('/');
    }

}