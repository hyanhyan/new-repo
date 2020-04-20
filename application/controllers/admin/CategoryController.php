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
        if (!empty($_POST) && isset($_POST['add'])) {
            $category = new Category($_POST);
            if (!empty($category->validate())) {
                $this->view->render('admin/category/create', []);
            }
        }
        $this->view->setTitle('Create Category');
        $this->view->render('admin/category/create', []);

        return true;
    }

    public function actionUpdate($id)
    {
        $update = Db::getConnection()->prepare("SELECT * FROM `categories` WHERE `id`='$id'");
        $update->execute();
        $arrSelect = $update->fetchAll(\PDO::FETCH_ASSOC);

        if (!empty($_POST) && isset($_POST['submit'])) {
            $update = new Category($_POST);
            {
                $this->view->render('admin/category/update', []);
            }
            $name = $_POST['name'];
            $update_all = Db::getConnection()->prepare("UPDATE `categories` SET `name`='$name' WHERE `id`='$id'");
            $update_all->execute();

        }
        $this->view->setTitle('Update');
        $this->view->render('admin/category/update', $arrSelect);

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