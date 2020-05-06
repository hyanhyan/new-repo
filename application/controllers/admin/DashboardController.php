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

            $this->view->render('admin/dashboard/login', []);
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
                $this->view->render('admin/dashboard/login', $validate);
            }
            if ($admin_model->login()) {
                $this->isAdmin();
                Auth::redirect('/admin');
            }
        }

        $this->view->render('admin/dashboard/login', []);
        return true;
    }

    public function actionProfile()
    {
        $this->view->setTitle('Profile');

        $this->view->render('admin/dashboard/profile', []);
        return true;
    }
}