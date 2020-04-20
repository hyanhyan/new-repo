<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 04.04.2020
 * Time: 20:28
 */

namespace application\controllers;

use application\base\BaseController;
use application\components\Auth;
use application\models\LoginForm;
use application\models\SignupForm;


class UserController extends BaseController
{
    public function actionRegister()
    {
        if (!empty($_POST) && isset($_POST['submit'])) {
            $model = new SignupForm($_POST);
            $val = $model->validate();
            if (!empty($val['error'])) {
                $this->view->render('user/register',$val['error']);
            }
            if ($model->register()) {
                Auth::goLoginPage();
            }
        }
        $this->view->render('user/register',[]);

        return true;
    }

    public function actionLogin()
    {
        if (!empty($_POST) && isset($_POST['submit'])){
            $model = new LoginForm($_POST);
            $val = $model->validate();
            if (!empty($val['error'])) {
                $this->view->render('user/login',$val['error']);
            }
            if ($model->login()) {
                Auth::goHome();
            }
        }
        $this->view->render('user/login',[]);
        echo "11";
        return true;
    }
}