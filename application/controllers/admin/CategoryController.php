<?php
namespace application\controllers\admin;

use application\base\AdminBaseController;
use application\components\Auth;
use application\components\Db;
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
        $category = new Category($_POST);
        $array = $category->CategoryIndex();
        if (!empty($category->CategoryIndex())) {
            $this->view->render('admin/category/index', $array);
        }
        $this->view->render('admin/category/index', []);

        return true;
    }


    public function actionCreate()
    {
        if (!empty($_POST) && isset($_POST['add'])){
            $category = new Category($_POST);
            $validate = $category->validate();
            if (empty($validate)) {
                if ($category->categoryCreate()) {
                    Auth::goCategoryPage();
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
                    Auth::redirect('/admin/category');

                }
            }
        }

        $this->view->setTitle('Update');
        $this->view->render('admin/category/update',$arrSelect);

        return true;
    }

    public function actionDelete()
    {
        $id = $_POST['id'];
        $del = Db::getConnection()->prepare("DELETE FROM `categories` WHERE `id`='$id'");

        if ($del) {
            echo 1;
            return true;
        }
        return false;
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