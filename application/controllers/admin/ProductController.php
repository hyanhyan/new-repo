<?php


namespace application\controllers\admin;


use application\base\AdminBaseController;
use application\components\Auth;
use application\components\Db;
use application\models\Category;
use application\models\Product;

class ProductController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex()
    {
        $this->view->setTitle('Product');
        $product = new Product($_POST);
        $array = $product->ProductIndex();
        if (!empty($product->ProductIndex())) {
            $this->view->render('admin/product/index', $array);
        }
        $this->view->render('admin/product/index', []);

        return true;
    }


    public function actionCreate()
    {
        if (!empty($_POST) && isset($_POST['submit'])) {
            $product = new Product($_POST);
            $all = Product::categorySelect();
            $validate = $product->validate();
            if (empty($validate)) {
                if ($product->ProductCreate()) {
                    Auth::goProductPage();
                }
            }
        }

        $this->view->setTitle('Create Product');
        $this->view->render('admin/product/create', [],$all);

        return true;
    }



}