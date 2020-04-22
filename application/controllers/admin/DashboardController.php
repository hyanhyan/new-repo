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
        if (!Auth::checkLogged('users')) {
            $this->view->setTitle('Admin Login');
            $this->view->setLayout('login');
            $this->view->render('admin/dashboard/login', []);
            die;
        }
        /*        if (!Auth::isAdmin()) {
                    $this->view->setTitle('home');
                    $this->view->render('site/index', []);
                }*/
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
            if ($admin_model->login(true)) {
                $this->isAdmin();
                Auth::goAdminPage();
            }
        }
        $this->view->setLayout('login');
        $this->view->render_AdminLogin('admin/dashboard/login', []);
        return true;
    }
}