<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;


class SiteController extends Controller
{

    public function actionIndex()

    {
        return $this->render('index');
    }

    public function actionSignup()

    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {

            // $model -> login = $_POST['Signup']['login']; //Вариант получения данных

            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate() && $model->signup())
            {
                return $this->goHome();
            }


            //var_dump($_POST['Signup']); die();
        }

        return $this->render('signup',['model'=>$model]);
    }

    public function actionLogin()

    {

        $login_model = new Login();

        if(isset($_POST['Signup']))
        {
            $login_model->attributes = Yii::$app->request->post('Login');
            var_dump($_POST['Login']); die();

        }
        return $this->render('login',['login_model' => $login_model]);

    }

}
