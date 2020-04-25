<?php

namespace application\controllers\admin;

use application\base\AdminBaseController;
use application\base\BaseView;
use application\components\Auth;
use application\components\Db;
use application\models\LoginForm;

class DashboardController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionIndex()
    {
        if (!Auth::checkLogged()) {
            $this->view->setTitle('Admin Login');
            $this->view->setLayout('login');
            $this->view->Admin('admin/dashboard/login', []);
            die;
        }
        $this->isAdmin();
        $this->view->setTitle('Admin');
        $this->view->render('admin/dashboard/index', []);

        return true;
    }

    public function actionLogin()
    {
        $this->view->setTitle('Admin Login');

        if (!empty($_POST) && isset($_POST['submit'])) {
            $admin_model = new LoginForm($_POST);
            $validate = $admin_model->validate();
            if (!empty($validate)) {
                var_dump($validate);
                die();
                $this->view->render('admin/dashboard/login', $validate);
            }
            if ($admin_model->login(true)) {
                $this->isAdmin();
                Auth::goAdminPage();

            }
        }
        $this->view->setLayout('login');
        $this->view->Admin('admin/dashboard/login', []);
        return true;
    }
}