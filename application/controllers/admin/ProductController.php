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
        $category = Db::getConnection()->prepare("SELECT * FROM `categories`");
        $category->execute();
        $arrCategory = $category->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($_POST) && isset($_POST['submit'])) {
            $product = new Product($_POST);
            if (!empty($product->validate())) {
                $this->view->render('admin/product/create', []);
            }
        }
        $this->view->setTitle('Create Product');
        $this->view->render('admin/product/create', []);

        return true;
    }


}