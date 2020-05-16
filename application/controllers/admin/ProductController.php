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
        $url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts=explode("/",$url);
        $i=end($parts);


        $limit=10;
        $offset=($i-1)*$limit;
        $page = new Product($_POST);
        $array = $page->productIndex($offset,$limit);
        $arr=$page->productPaginate();

        $searchProduct = $_POST['search'];

        if (!empty($searchProduct)) {

            $prSearch = "SELECT * FROM products  LEFT JOIN `categories` ON products.category_id=categories.id WHERE `prName` LIKE '$searchProduct%' ";
            $searchProducts = Db::getConnection()->prepare($prSearch);
            $searchProducts->execute();
            $arraySearch = $searchProducts->fetchAll(\PDO::FETCH_ASSOC);
            $this->view->render('admin/product/index', [$arraySearch,$arr]);
        }
       else {
            $this->view->render('admin/product/index', [$array,$arr]);
        }


        $this->view->render('admin/product/index',[]);

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
                    Auth::redirect('/admin/product/1');
                }
            }
        }

        $this->view->setTitle('Create Product');
        $this->view->render('admin/product/create', $all);

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
            $sel = $_POST['sel'];
            var_dump($prname);
            var_dump($sel);

            $update = new Product($_POST);
            $validate = $update->validate();
            $updProduct = Db::getConnection()->prepare("UPDATE `products` SET `prName`='$prname', `category_id`='$sel' WHERE `id`='$id'");
            if($updProduct->execute()){
                Auth::redirect('/admin/product/1');
            }

                }

        $this->view->setTitle('Update');
        $this->view->render('admin/product/update', [$array, $arrSelect]);

        return true;
    }

    public function actionView($id)
    {
        $view = Db::getConnection()->prepare("SELECT * FROM `products`
                                            LEFT JOIN `categories` ON products.category_id=categories.id ");
        $view->execute();
        $arr = $view->fetchAll(\PDO::FETCH_ASSOC);

        $this->view->setTitle('View product');
        $this->view->render('admin/product/view', $arr);

        return true;
    }

    public function actionUpload()
    {

        if (!empty($_POST) && isset($_POST['upload_button'])) {
            $dir = "uploads/";

            if (!is_dir($dir)) {
                echo "Directory not found,lets create the folder";
                mkdir($dir, "0777", true);
            }
            $fileName = $_FILES['file']['name'];
            $fileError = $_FILES['file']['error'];
            $fileSize = $_FILES['file']['size'];
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowed_type = ["jpg", "jpeg", "png", "gif"];

            if (in_array($extension, $allowed_type)) {
                if ($fileError === 0) {
                    if ($fileSize < 50000000) {
                        $new_name = rand() . "." . $extension;
                        $path = "uploads/" . $new_name;
                        $images = array_values(array_diff(scandir($dir), array('..', '.', 'thumbs')));


                        move_uploaded_file($_FILES['file']['tmp_name'], $path);


                    }
                    $this->view->render('admin/product/upload', $images);
                }
            }
        }
        $this->view->render('admin/product/upload', []);

        return true;

    }

    public function actionDelete()
    {
        $id = $_POST['id'];

        $delete = Db::getConnection()->prepare("DELETE FROM `products` WHERE `id`='$id'");

        if ($delete) {
            echo 1;
            return true;
        }
        return false;
    }

    public function actionImage()
    {
       $path=$_POST['id'];

        unlink('uploads' . $path);

        echo json_encode($path);
        return true;

}

}