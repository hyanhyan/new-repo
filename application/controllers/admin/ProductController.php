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
        $all = Product::categorySelect();
        if (!empty($_POST) && isset($_POST['submit'])) {

            $product = new Product($_POST);
            $validate = $product->validate();
            if (empty($validate)) {
                if ($product->ProductCreate()) {
                    Auth::goProductPage();
                }
            }
        }

        $this->view->setTitle('Create Product');
        $this->view->render('admin/product/create',$all);

        return true;
    }

    public function actionUpdate($id)
    {

        $select = Db::getConnection()->prepare("SELECT * FROM `categories`");
        $select->execute();
        $arrSelect = $select->fetchAll(\PDO::FETCH_ASSOC);
        $prSelect = Db::getConnection()->prepare("SELECT * FROM `products` WHERE id='$id'");
        $prSelect->execute();
        $array = $prSelect->fetchAll(\PDO::FETCH_ASSOC);

        if (!empty($_POST) && isset($_POST['submit'])) {
            $prname = $_POST['product'];
            $sel=$_POST['sel'];
            var_dump($sel);
            var_dump($prname);
            $update = new Product($_POST);
            $validate = $update->validate();
            $updCategory = Db::getConnection()->prepare("UPDATE `products` SET prName=$prname, category_id=$sel WHERE `id`='$id'");

            if (empty($validate)) {
                if ($updCategory->execute()){
                    Auth::goProductPage();

                }
            }
        }

        $this->view->setTitle('Update');
        $this->view->render('admin/product/update',[$array,$arrSelect]);

        return true;
    }
    public function actionView($id)
    {
        $view = Db::getConnection()->prepare("SELECT * FROM `products` WHERE `id`='$id'");
        $view->execute();
        $arr = $view->fetchAll(\PDO::FETCH_ASSOC);

        $this->view->setTitle('View product');
        $this->view->render('admin/product/view', $arr);

        return true;
    }
    public function actionDelete()
    {
        $id = $_POST['idd'];
        $del = Db::getConnection()->prepare("DELETE FROM `products` WHERE `id`='$id'");

        if ($del) {
            echo 1;
            return true;
        }
        return false;
    }


}