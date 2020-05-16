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
            $register = new SignupForm($_POST);
            $validate = $register->validate();
            if (!empty($validate)) {
                $this->view->render('user/register', $validate);die();

            }
            if ($register->register()) {
                Auth::redirect('/user/login');
            }
        }
        $this->view->render('user/register',[]);

        return true;
    }

    public function actionLogin()
    {
        if (!empty($_POST) && isset($_POST['submit'])){
            $login = new LoginForm($_POST);
            $val = $login->validate();
            if (!empty($val)) {
                $this->view->render('user/login', $val);
            }
            if ($login->login()) {
                Auth::redirect('/');
            }
            }

        $this->view->render('user/login',[]);

        return true;
    }
    public function actionProfile()
    {
        $this->view->setTitle('Profile');

        $this->view->render('user/profile', []);
        return true;

}
    public function actionLogout()
    {
        Auth::logout();

    }
}