<?php
namespace application\controllers\admin;

use application\base\AdminBaseController;
use application\components\Auth;
use application\components\Db;
use application\components\Pagination;
use application\models\Category;

class CategoryController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex()
    {


        $this->view->setTitle('Category');
        $url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts=explode("/",$url);
        $i=end($parts);


        $limit=10;
        $offset=($i-1)*$limit;
        $category = new Category($_POST);
        $index = $category->categoryIndex($offset,$limit);
        $arr=$category->categoryPaginate();

        $searchName = $_POST['search'];

        if (!empty($searchName)) {

            $search = "SELECT * FROM categories WHERE `name` LIKE '$searchName%'";
            $searchCategory = Db::getConnection()->prepare($search);
            $searchCategory->execute();
            $array = $searchCategory->fetchAll(\PDO::FETCH_ASSOC);

            $this->view->render('admin/category/index', [$array,$arr]);
        }

       else {
            $this->view->render('admin/category/index', [$index,$arr]);
        }


        $this->view->render('admin/category/index',[]);

        return true;
    }


    public function actionCreate()
    {
        if (!empty($_POST) && isset($_POST['add.php'])){
            $category = new Category($_POST);
            $validate = $category->validate();
            if (empty($validate)) {
                if ($category->categoryCreate()) {
                    Auth::redirect('/admin/category/1');
                }
            }
        }
        $this->view->setTitle('Create Category');
        $this->view->render('admin/category/create', []);

        return true;
    }
    public function actionUpdate($id)
    {
        $select = Db::getConnection()->prepare("SELECT * FROM `categories` WHERE `id`='$id'");
        $select->execute();
        $arrSelect = $select->fetchAll(\PDO::FETCH_ASSOC);

        if (!empty($_POST) && isset($_POST['submit'])) {
            $name = $_POST['name'];
            $update = new Category($_POST);
            $validate = $update->validate();
            if (empty($validate)) {
                if (Category::categoryUpdate($id, $name)) {
                    Auth::redirect('/admin/category/1');

                }
            }
        }

        $this->view->setTitle('Update');
        $this->view->render('admin/category/update',$arrSelect);

        return true;
    }

    public function actionDelete()
    {
        $id = $_POST['del_id'];
        var_dump($id);
        $del = Db::getConnection()->prepare("DELETE  FROM `categories` WHERE `id`='$id'");
        $del->execute();
            echo 1;
            return true;

    }

    public function actionView($id)
    {
        $view = Db::getConnection()->prepare("SELECT * FROM `categories` WHERE `id`='$id'");
        $view->execute();
        $arr = $view->fetchAll(\PDO::FETCH_ASSOC);

        $this->view->setTitle('View category');
        $this->view->render('admin/category/view', $arr);

        return true;
    }
}