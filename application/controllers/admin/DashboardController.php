<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 11.04.2020
 * Time: 19:07
 */

namespace application\controllers\admin;

use application\base\AdminBaseController;
use application\components\Auth;
use application\components\Message;
use application\models\LoginForm;

class DashboardController extends AdminBaseController
{
    public function actionIndex()
    {
        if (!Auth::checkLogged()) {
            Message::set_message('please enter your login and password');
            header("Location: /admin/dashboard/login");
        }
        if (!Auth::isAdmin('admin')) {
            header("Location: /");
        }
        $this->view->setTitle('home');
        $this->view->render('admin/dashboard/index', []);

        return true;
    }


    public function actionLogin()
    {
        $this->view->setTitle('Admin');

        if (!empty($_POST) && isset($_POST['submit'])) {
            $admin = new LoginForm($_POST);
            $validate = $admin->validate();
            if (!empty($validate)) {
                $this->view->render('admin/dashboard/login', $validate);
            }
            if ($admin->login(true)) {
                $this->isAdmin();
                Auth::goAdminPage();
            }
        }
        $this->view->setLayout('login');
        $this->view->render_Admin('admin/dashboard/login', []);
        return true;
    }
}